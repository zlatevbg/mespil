const photoswipe=(()=>{const t='<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="'+__.photoswipe.close+'"></button><button class="pswp__button pswp__button--share" title="'+__.photoswipe.share+'"></button><button class="pswp__button pswp__button--fs" title="'+__.photoswipe.fullscreen+'"></button><button class="pswp__button pswp__button--zoom" title="'+__.photoswipe.zoom+'"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="'+__.photoswipe.prev+'"></button><button class="pswp__button pswp__button--arrow--right" title="'+__.photoswipe.next+'"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>';document.body.insertAdjacentHTML("beforeend",t);const e=()=>{const t=window.location.hash.substring(1),e={};if(t.length<5)return e;const o=t.split("&");for(let t=0;t<o.length;t++){if(!o[t])continue;const s=o[t].split("=");s.length<2||(e[s[0]]=s[1])}return e},o=(t,e,o,s)=>{const i=(t=>{const e=[];for(const o of t.querySelectorAll(".photoswipe")){const t=o.getAttribute("data-photoswipe-size").split("x"),s={src:o.href,w:parseInt(t[0],10),h:parseInt(t[1],10),pid:o.getAttribute("data-photoswipe-pid")};if(o.title&&(s.title=o.title),o.children.length>0){const t=o.children[0];s.msrc=t.src,s.thumbnail=t}e.push(s)}return e})(e),p={galleryPIDs:!0,galleryUID:e.getAttribute("data-photoswipe-gid"),getThumbBoundsFn:t=>{if(i[t].thumbnail){const e=i[t].thumbnail.getBoundingClientRect();return{x:e.left,y:e.top+window.pageYOffset,w:e.width}}}};if(s)if(p.galleryPIDs){for(let e=0;e<i.length;e++)if(i[e].pid===t){p.index=e;break}}else p.index=parseInt(t,10)-1;else p.index=parseInt(t,10);isNaN(p.index)||(o&&(p.showAnimationDuration=0),(e=new PhotoSwipe(document.querySelectorAll(".pswp")[0],PhotoSwipeUI_Default,i,p)).init())};return{setup:function(t){const s=document.querySelectorAll(t),i=e();let p=0;for(const t of s)t.getAttribute("data-photoswipe-gid")||t.setAttribute("data-photoswipe-gid",++p),i.pid&&i.gid&&i.gid==t.getAttribute("data-photoswipe-gid")&&(o(i.pid,t,!0,!0),"undefined"!=typeof gtag&&gtag("event","photoswipe",{event_category:"Photos",event_action:"PhotoSwipe",event_label:"Permalink: "+window.location.pathname+"/"+i.gid+"/"+i.pid}));for(const t of s)t.addEventListener("click",e=>{const s=e.target.closest(".photoswipe");if(s){e.preventDefault();let i=0;for(const e of t.querySelectorAll(".photoswipe")){if(e===s)break;i++}o(i,t),"undefined"!=typeof gtag&&gtag("event","photoswipe",{event_category:"Photos",event_action:"PhotoSwipe",event_label:window.location.pathname+"/"+t.getAttribute("data-photoswipe-gid")+"/"+s.getAttribute("data-photoswipe-pid")})}})},open:o}})();