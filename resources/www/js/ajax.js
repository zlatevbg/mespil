/* global __, axios, datatable, loadjs, gtag */
const ajax = (() => {
    let queues = {}

    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
    axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content
    const CancelToken = axios.CancelToken

    bind(document)

    function bind(container) {
        if (!container) {
            return;
        }

        for (const obj of container.querySelectorAll('[data-ajax]')) {
            let tag = obj.tagName.toLowerCase()
            let action
            let form = obj
            let method = obj.getAttribute('data-method') || 'post'
            const queue = obj.getAttribute('data-queue') || 'sync'
            const spinner = obj.getAttribute('data-spinner') || 'icon'
            const alert = obj.getAttribute('data-ajax-alert') || 'form'
            const alertPosition = obj.getAttribute('data-ajax-alert-position') || 'afterbegin'
            const alertDismissible = obj.getAttribute('data-ajax-alert-dismissible') || true
            const alertClass = obj.getAttribute('data-ajax-alert-class')
            const disableAlert = obj.hasAttribute('data-ajax-disable-alert')
            const disableAlertHeader = obj.hasAttribute('data-ajax-disable-alert-header')

            if (tag === 'form') {
                action = obj.getAttribute('action')
                method = obj.getAttribute('method').toLowerCase()
            } else if (tag === 'button') {
                action = obj.getAttribute('data-action')
            } else { // 'A'
                action = obj.href
            }

            obj.addEventListener(tag === 'form' ? 'submit' : 'click', (e) => {
                e.preventDefault()

                if (obj.getAttribute('data-form')) {
                    form = container.querySelector('#' + obj.getAttribute('data-form'))
                    tag = 'form'
                }

                const separator = action.indexOf('?') === -1 ? '?' : '&'

                ajaxify({
                    obj: obj,
                    method: method,
                    queue: queue,
                    spinner: spinner,
                    alert: alert,
                    alertPosition: alertPosition,
                    alertDismissible: alertDismissible,
                    alertClass: alertClass,
                    disableAlert: disableAlert,
                    disableAlertHeader: disableAlertHeader,
                    action: action + (obj.getAttribute('data-append-id') !== null ? '/' + datatable.selected[obj.getAttribute('data-table')] : '') + (obj.getAttribute('data-overview') !== null ? separator + 'overview=true' : ''),
                    data: tag === 'form' ? new FormData(form) : null,
                })
            })
        }
    }

    function ajaxify(params) {
        queues[params.queue] = {}

        if (params.queue.startsWith('sync')) {
            ajaxAbort(params.queue)
        }

        if (params.obj) {
            params.tag = params.obj.tagName.toLowerCase()

            if (!params.skipLock) {
                ajaxLock(params)
            }
        }

        queues[params.queue].source = CancelToken.source()

        axios({
            url: params.action,
            cancelToken: queues[params.queue].source.token,
            data: params.data,
            method: params.method,
        }).then(function(response) {
            if (response.headers['x-location']) { // redirect fix for IE11 & Edge
                window.location.replace(response.headers['x-location'])
            }

            if (response.data.reload || ((response.status == 201 || response.status == 202 || response.status == 204) && !response.data)) {
                window.location.reload(true)
            }

            if (response.data.callback) {
                const callback = eval(response.data.callback)
                if (typeof callback === 'function') {
                    callback(response.data)
                }
            }

            if (params.obj) {
                if (!params.skipLock) {
                    ajaxUnlock(params)
                }

                ajaxClear(params.obj, params.tag)
            }

            if (response.data.status) {
                params.obj.setAttribute('href', response.data.status.href)
                params.obj.setAttribute('title', response.data.status.title)

                let icon = params.obj.querySelector('[data-fa-i2svg]')
                if (icon) {
                    params.obj.removeChild(icon)
                }

                params.obj.insertAdjacentHTML('afterbegin', __.icons.status[response.data.status.icon])
            }

            if (response.data.errors && !params.skipErrors) {
                ajaxError(params, response.data.errors)
            }

            if (response.data.reset || response.data._old_input) {
                ajaxReset(params.obj, response.data)
            }

            if (response.data.event && typeof gtag != 'undefined') {
                gtag('event', response.data.event, response.data.eventData)
            }

            if (response.data.conversion && typeof gtag != 'undefined' && typeof fbq != 'undefined') {
                gtag('event', 'conversion', {'send_to': 'AW-818585655/Gt65CNTus-gBELfAqoYD'})
                fbq('track', 'Lead')
                let img = new Image()
                img.src = 'https://px.ads.linkedin.com/collect/?pid=1378921&conversionId=3797473&fmt=gif'
            }

            if (response.data.resetRecaptcha) {
                grecaptcha.reset()
            }

            if (response.data.datatables) {
                datatable.draw(response.data.datatables)
                $('[data-toggle="popover"]').popover()
            }

            if (response.data.enable) {
                for (const node of document.querySelectorAll(response.data.enable.join(', '))) {
                    node.classList.remove('disabled')
                }
            }

            if (response.data.disable) {
                for (const node of document.querySelectorAll(response.data.disable.join(', '))) {
                    node.classList.add('disabled')
                }
            }

            if (response.data.show) {
                for (const node of document.querySelectorAll(response.data.show.join(', '))) {
                    node.classList.remove('hidden')
                    node.removeAttribute('hidden')
                }
            }

            if (response.data.hide) {
                for (const node of document.querySelectorAll(response.data.hide.join(', '))) {
                    node.classList.add('hidden')
                    node.setAttribute('hidden', '')
                }
            }

            const message = response.data.success || response.data.message
            if (message) {
                let obj = params.obj

                if (params.alert) {
                    obj = obj.closest(params.alert)
                }

                ajaxSuccess(params, obj, message)
            }
        }).catch(function(error) {
            if (axios.isCancel(error)) {
                // console.log('Request canceled', error.message)
                if (params.obj) {
                    ajaxUnlock(params)

                    ajaxClear(params.obj, params.tag)
                }
            } else {
                if (error.response) {
                    // The request was made and the server responded with a status code
                    // that falls out of the range of 2xx
                    // console.log(error.response.data)
                    // console.log(error.response.status)
                    // console.log(error.response.headers)

                    if (String(error.response.status).startsWith(30)) { // 30* redirects
                        window.location.replace(error.response.headers['x-location'])
                    } else {
                        if (params.obj) {
                            ajaxUnlock(params)

                            ajaxClear(params.obj, params.tag)
                        }

                        if (error.response.status === 422) { // Unprocessable Entity: laravel response for validation errors
                            ajaxError(params, error.response.data.errors)
                        } else {
                            ajaxError(params, error.response.status + ': ' + error.response.data.message)
                        }
                    }
                } else if (error.request) {
                    // The request was made but no response was received
                    // console.log(error.request)
                } else {
                    // Something happened in setting up the request that triggered an Error
                    // console.log('Error', error.message)
                }
            }
        })
    }

    function ajaxAbort(queue) {
        if (queues[queue].source) {
            queues[queue].source.cancel('Operation canceled.')
        }
    }

    function ajaxLock(params) {
        let el = params.obj

        if (params.tag === 'a') {
            el.classList.add('disabled')
        } else if (params.tag === 'button' || params.tag === 'select') {
            el.disabled = true
        } else { // form
            el = el.querySelector('[type=submit]')
            if (el) {
                el.disabled = true
                params.obj.setAttribute('tabindex', '-1')
                params.obj.focus()
                params.obj.addEventListener('keydown', (e) => {
                    if (e.defaultPrevented) {
                        return // Should do nothing if the default action has been cancelled
                    }

                    const keyCode = e.which || e.keyCode
                    if (keyCode === 27 && el.classList.contains('js-submitted')) { // ESC
                        e.stopPropagation()
                        ajaxUnlock(params)
                        ajaxAbort(params.queue)
                    }
                })

                clearTimeout(queues[params.queue].timer)
                queues[params.queue].timer = window.setTimeout(() => el.classList.add('js-submitted'), 1000)
            }
        }

        if (params.spinner) {
            queues[params.queue].html = el.innerHTML
            if (params.spinner === 'replace') {
                el.innerHTML = ''
            } else {
                let icon = el.querySelector('[data-fa-i2svg]')
                if (icon) {
                    el.removeChild(icon)
                }
            }
            el.insertAdjacentHTML('afterbegin', __.icons.spinner)
        }
    }

    function ajaxUnlock(params) {
        let obj = params.obj
        if (params.tag === 'a') {
            obj.classList.remove('disabled')
        } else if (params.tag === 'button' || params.tag === 'select') {
            obj.disabled = false
        } else { // form
            clearTimeout(queues[params.queue].timer)
            obj = obj.querySelector('[type=submit]')
            if (obj) {
                obj.disabled = false
                obj.focus()
                obj.classList.remove('js-submitted')
            }
        }

        if (params.spinner) {
            obj.innerHTML = queues[params.queue].html
        }
    }

    function ajaxClearSuccess(obj, tag, selector = '.alert-success') {
        ajaxClear(obj, tag, selector)
    }

    function ajaxClearDanger(obj, tag, selector = '.alert-danger') {
        ajaxClear(obj, tag, selector)
    }

    function ajaxClear(obj, tag, selector = '.alert') {
        let el

        if (tag === 'form') {
            el = obj

            for (const input of obj.querySelectorAll('.form-control')) {
                input.classList.remove('is-valid')
                input.classList.remove('is-invalid')

                const parent = input.closest('.form-group, .form-check')
                let label = parent.querySelector('label')
                if (!label) {
                    label = parent
                }

                label.classList.remove('is-valid')
                label.classList.remove('is-invalid')
            }
        } else {
            el = document.querySelector('main')
        }

        for (const node of el.querySelectorAll(selector)) {
            node.parentNode.removeChild(node)
        }
    }

    function ajaxSuccess(params, obj, message, position) {
        if (typeof obj == 'string') {
            obj = document.querySelector(obj)
        }

        alertPosition = position || params.alertPosition

        const html = '<div class="alert alert-success ' + (params.alertClass) + (params.alertDismissible === true ? ' alert-dismissible' : '') + ' fade show ' + (alertPosition != 'replace' && obj.classList.contains('position-relative') ? ' position-absolute z-index-alert' : '') + '" role="alert">' + (params.alertDismissible === true ? '<button type="button" class="close" data-dismiss="alert" aria-label="' + __.text.close + '"><span aria-hidden="true">&times;</span></button>' : '') + (typeof message === 'object' ? message.join('<br>') : message) + '</div>'

        if (alertPosition == 'replace') {
            obj.querySelector('.replace-wrapper').classList.add('d-none')
            obj.insertAdjacentHTML('afterbegin', html)
        } else {
            obj.insertAdjacentHTML(alertPosition, html)
        }

        let selector
        if (obj.id) {
            selector = '#' + obj.id
        } else {
            selector = obj.tagName + (obj.className ? '.' + obj.className : '')
        }

        if (document.querySelector(selector + ' .alert')) {
            scrollIntoView(selector + ' .alert')
        }
    }

    function ajaxError(params, error) {
        let obj = params.obj

        if (params.alert) {
            obj = obj.closest(params.alert)
        }

        if (typeof obj == 'string') {
            obj = document.querySelector(obj)
        }

        if (typeof error === 'object') {
            if (Object.keys(error).length && !params.disableAlert && !params.disableAlertHeader) {
                obj.insertAdjacentHTML('afterbegin', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="' + __.text.close + '"><span aria-hidden="true">&times;</span></button>' + __.text.error + '</div>')
            }

            for (const key of Object.keys(error)) {
                let selector

                if (key.includes('[]')) {
                    selector = 'input[name="' + key + '"]'
                } else if (key.includes('.')) {
                    const keys = key.split('.')
                    selector = '#' + keys[0] + '-' + (parseInt(keys[1]) + 1)
                } else {
                    selector = '#' + key
                }

                const input = obj.querySelector(selector)

                if (input) {
                    const parent = input.closest('.form-group, .form-check')
                    const feedback = parent.querySelector('.invalid-feedback')
                    const multiselect = parent.querySelector('.multiselect-wrapper')

                    let label = parent.querySelector('label')
                    if (!label) {
                        label = parent
                    }

                    if (multiselect) {
                        multiselect.querySelector('button').classList.add('is-invalid')
                        multiselect.insertAdjacentHTML('beforeend', '<span class="invalid-feedback" role="alert">' + error[key].join('<br>') + '</span>')
                    } else {
                        input.classList.add('is-invalid')
                        feedback.innerHTML = error[key].join('<br>')
                        if (label) {
                            label.classList.add('is-invalid')
                        }
                    }
                } else {
                    obj.querySelector('.alert').insertAdjacentHTML('beforeend', '<p class="fa-left"><i class="fas fa-exclamation-triangle"></i>' + error[key].join('<br>') + '</p>')
                }
            }
        } else {
            if (!params.disableAlert && !params.disableAlertHeader) {
                obj.insertAdjacentHTML('afterbegin', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="' + __.text.close + '"><span aria-hidden="true">&times;</span></button>' + error + '</div>')
            }
        }

        if (obj.id) {
            selector = '#' + obj.id
        } else {
            selector = obj.tagName + (obj.className ? '.' + obj.className : '')
        }

        if (document.querySelector(selector + ' .alert')) {
            scrollIntoView(selector + ' .alert')
        }
    }

    function ajaxResetInput(input) {
        const type = input.type.toLowerCase()

        if (['checkbox', 'radio'].includes(type)) {
            input.checked = false
        } else if (['select-one', 'select-multiple'].includes(type)) {
            input.selectedIndex = 0 // -1 deselects everything
        } else {
            input.value = ''
        }
    }

    function ajaxReset(obj, data) {
        const inputs = obj.querySelectorAll('input:not([type="hidden"]):not([type="submit"]):not([readonly]):not([disabled]), select:not([disabled]), textarea:not([readonly]):not([disabled])')
        let names

        if (data._old_input) { // Laravel JSON response: ->withInput()
            names = Object.keys(data._old_input)

            for (const input of inputs) {
                if (!names.includes(input.name)) {
                    ajaxResetInput(input)
                }
            }
        }

        if (data.reset) {
            if (data.reset.only) {
                for (const name of data.reset.only) {
                    ajaxResetInput(document.querySelector('#' + name))
                }
            } else if (data.reset.except) {
                names = Object.values(data.reset.except)

                for (const input of inputs) {
                    if (!names.includes(input.name)) {
                        ajaxResetInput(input)
                    }
                }
            } else {
                for (const input of inputs) {
                    ajaxResetInput(input)
                }

                if (typeof obj.tagName === 'string' && obj.tagName.toLowerCase() == 'form') {
                    obj.reset()
                }
            }
        }
    }

    return {
        ajaxify: ajaxify,
        bind: bind,
        success: ajaxSuccess,
        error: ajaxError,
        clearSuccess: ajaxClearSuccess,
    }
})()
