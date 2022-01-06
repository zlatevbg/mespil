// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

/* global Tweezer */
// https://getbootstrap.com/docs/4.3/getting-started/browsers-devices/#select-menu
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})

// For browsers that do not support Element.closest(), but carry support for document.querySelectorAll(), a polyfill exists:
if (window.Element && !Element.prototype.closest) {
  Element.prototype.closest = function (s) {
    const matches = (this.document || this.ownerDocument).querySelectorAll(s)
    let i
    let el = this
    do {
      i = matches.length
      while (--i >= 0 && matches.item(i) !== el) {}
    } while ((i < 0) && (el = el.parentElement))
    return el
  }
}

if (typeof HTMLCollection.prototype[Symbol.iterator] === 'undefined') {
  HTMLCollection.prototype[Symbol.iterator] = Array.prototype[Symbol.iterator]
}

if (typeof NodeList.prototype[Symbol.iterator] === 'undefined') {
  NodeList.prototype[Symbol.iterator] = Array.prototype[Symbol.iterator]
}

// from:https://github.com/jserz/js_piece/blob/master/DOM/ChildNode/remove()/remove().md
(function (arr) {
  arr.forEach(function (item) {
    if (item.hasOwnProperty('remove')) {
      return
    }

    Object.defineProperty(item, 'remove', {
      configurable: true,
      enumerable: true,
      writable: true,
      value: function remove() {
        this.parentNode.removeChild(this)
      },
    })
  })
})([Element.prototype, CharacterData.prototype, DocumentType.prototype])

function debounce(callback, wait, context = this) {
  let timeout = null
  let callbackArgs = null

  const later = () => callback.apply(context, callbackArgs)

  return function () {
    callbackArgs = arguments
    clearTimeout(timeout)
    timeout = setTimeout(later, wait)
  }
}

function escapeRegExp(string) {
  return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') // $& means the whole matched string
}

const emails = (() => {
  // ROT 13
  const decode = (email) => {
    return email.replace(/[a-zA-Z]/g, function (c) {
      return String.fromCharCode((c <= 'Z' ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26)
    })
  }

  const init = () => {
    for (const email of document.querySelectorAll('.encoded-email')) {
      const address = email.getAttribute('data-email')
      email.href = decode('znvygb:' + address)
      email.text = decode(address)
    }
  }

  init()

  return {
    init: init,
  }
})();

$('[data-toggle="popover"]').popover()

function elementInViewport(el) {
    const rect = el.getBoundingClientRect()

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
}

function scrollIntoView(target, margin = 20) {
  const start = window.scrollY || window.pageYOffset
  let stop

  switch (typeof target) {
    case 'number':
      stop = start + target
      target = null
      break
    case 'object':
      break
    case 'string':
      target = document.querySelector(target)
      break
  }

  if (target) {
    if (elementInViewport(target)) {
      return
    }

    stop = target.getBoundingClientRect().top + start
  }

  const end = stop - margin

  if ('scrollBehavior' in document.documentElement.style || typeof Tweezer !== 'function') {
    window.scrollTo(0, end) // target.scrollIntoView({block: 'start', behavior: 'smooth'})
  } else {
    new Tweezer({
      start: start,
      end: end,
    })
    .on('tick', v => window.scrollTo(0, v))
    .begin()
  }

  if (target) {
    target.setAttribute('tabindex', '-1')
    target.focus()
  }
}
