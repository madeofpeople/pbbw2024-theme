(()=>{var e={348:()=>{"use strict";const e=window.wp.blocks,t=window.wp.i18n;[{}].forEach((t=>{(0,e.registerBlockVariation)("core/group",t)})),[{name:"list",title:(0,t.__)("Basic List","bpbw"),description:(0,t.__)("Display a basic list.","bpbw"),isDefault:!0,icon:"editor-ul",attributes:{className:"basic",placeholder:(0,t.__)("Add list items ...","bpbw")},example:{attributes:{className:"basic"}},scope:["block","inserter","transform"],isActive:(e,t)=>e.className===t.className},{name:"bullet-list-columns",title:(0,t.__)("Columned Bullet List","bpbw"),description:(0,t.__)("A list displayed in 2 columns.","bpbw"),attributes:{className:"bullet-list-columns",placeholder:(0,t.__)("Add list items ...","bpbw")},icon:"columns",scope:["transform"],isActive:(e,t)=>e.className===t.className},{name:"bullet-list",title:(0,t.__)("Bullet List","bpbw"),description:(0,t.__)("A regular list, with fancy bullets.","bpbw"),icon:"list-view",attributes:{className:"bullet-list",placeholder:(0,t.__)("Add list items ...","bpbw")},scope:["transform"],isActive:(e,t)=>e.className===t.className},{name:"icon-list",title:(0,t.__)("Icon List","bpbw"),description:(0,t.__)("A regular with icon.","bpbw"),icon:"star-filled",attributes:{className:"icon-list",placeholder:(0,t.__)("Add list items ...","bpbw")},scope:["transform"],isActive:(e,t)=>e.className===t.className}].forEach((t=>{(0,e.registerBlockVariation)("core/list",t)})),[{name:"paragraph",title:(0,t.__)("Paragraph","bpbw"),description:(0,t.__)("A standard paragraph.","bpbw"),isDefault:!0,category:"text",keywords:[(0,t.__)("intro","bpbw"),(0,t.__)("paragraph","bpbw"),(0,t.__)("sentence","bpbw")],icon:"editor-alignleft",attributes:{className:"ptag",placeholder:(0,t.__)("Add content...","bpbw")},example:{attributes:{content:(0,t.__)("This is a bock for displaying the opening paragraph, the big idea, the tl;dr.","bpbw")}},scope:["block","inserter","transform"]},{name:"lede",title:(0,t.__)("Lede","bpbw"),description:(0,t.__)("Add opening sentence or paragraph.","bpbw"),icon:"editor-justify",attributes:{className:"lede",placeholder:(0,t.__)("Add content...","bpbw")},scope:["transform"]}].forEach((t=>{(0,e.registerBlockVariation)("core/paragraph",t)})),[{name:"parallax",title:(0,t.__)("Cover","debtcollective"),description:(0,t.__)("Cover image with background image.","bpbw"),keywords:[(0,t.__)("image","debtcollective"),(0,t.__)("background","debtcollective"),(0,t.__)("hero","debtcollective")],isDefault:!0,category:"media",attributes:{isParallax:!0,dimRatio:0,url:"https://images.unsplash.com/photo-1520991323542-c159d7282b9f",backgroundColor:"rgba(128, 173, 108, 0.25)"},innerBlocks:[["core/heading",{className:"cover__title",level:2,textColor:"white"}]],example:{attributes:{isParallax:!0,dimRatio:0,url:"https://images.unsplash.com/photo-1520991323542-c159d7282b9f",backgroundColor:"rgba(128, 173, 108, 0.25)"},innerBlocks:[{name:"core/heading",attributes:{className:"cover__title",level:2,textColor:"white",content:(0,t.__)("Indigenous-led Monitoring and Surveillance","bpbw")}},{name:"core/paragraph",attributes:{className:"cover__content",textColor:"white",content:(0,t.__)("We are calling on governments and businesses to work together to finance and empower indigenous-led monitoring for deforestation-free supply chains.","bpbw")}}]}}].forEach((t=>{(0,e.registerBlockVariation)("core/cover",t)})),[{name:"testimonial",title:(0,t.__)("Testimonial","bpbw"),description:(0,t.__)("Large quote with background image.","bpbw"),category:"media",icon:"format-quote",keywords:[(0,t.__)("quote","bpbw"),(0,t.__)("blockquote","bpbw"),(0,t.__)("callout","bpbw")],attributes:{className:"testimonial"},innerBlocks:[["core/cover",{isParallax:!0,dimRatio:0,url:"https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0",backgroundColor:"rgba(128, 173, 108, 0.25)"},[["core/group",{className:"tout__content"},[["core/quote",{className:"content",textColor:"white"}]]]]]],example:{attributes:{},innerBlocks:[{name:"core/cover",attributes:{isParallax:!0,dimRatio:0,url:"https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0",backgroundColor:"rgba(128, 173, 108, 0.25)"},innerBlocks:[{name:"core/quote",attributes:{className:"content",citation:(0,t.__)("Bitaté Uru-eu-wau-wau","bpbw")},innerBlocks:[{name:"core/paragraph",attributes:{content:(0,t.__)("“historically, our existence has been marginalized and erased. through this film we're changing that.”","bpbw")}}]}]}]},scope:["block","inserter","transform"]}].forEach((t=>{(0,e.registerBlockVariation)("site-functionality/tout",t)}))},73:()=>{document.body.className=document.body.className.replace("no-js","js")},821:()=>{const e=function(){(function(){let e=!1;var t;return t=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0),e})()&&document.body.classList.add("is-mobile")};"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",e):e()},74:()=>{function e(){document.body.classList.add("ready")}"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",e):e()},222:()=>{function e(){const e=document.querySelector(".nav--primary .main-navigation"),t=document.querySelector(".menu__toggle"),o=e.querySelector(".menu__inner-toggle"),i=document.querySelector(".menu__underlay");console.log("mobileMenuUnderlay",i),t.addEventListener("click",(t=>{t.preventDefault(),e.classList.toggle("open"),i.classList.toggle("visible")})),o.addEventListener("click",(t=>{t.preventDefault(),e.classList.remove("open"),i.classList.remove("visible")})),i.addEventListener("click",(t=>{t.preventDefault(),i.classList.remove("visible"),e.classList.remove("open")}))}"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",e):e()},913:()=>{const e=()=>{const e=document.querySelectorAll(".entry-content > section, .site-header"),t={threshold:.24,root:Window.visualViewport},o=document.querySelector(".site-header .navigation-menu");let i=null;const n=new IntersectionObserver((t=>{t.forEach((t=>{t.isIntersecting?(t.target.classList.add("in-view"),t.target.classList.remove("out-of-view"),console.log("»»»»",t.target.id,"scrolled into view."),o&&(t=>{if(console.log(Array.from(e).find((e=>e===t))),Array.from(e).find((e=>e===t))){i&&i.classList.remove("active");const e=o.querySelector(`a[href="/#${t.id}"]`);e&&(i=e),i&&i.classList.add("active")}})(t.target)):(t.target.classList.contains("site-header")&&t.target.querySelector(".nav--primary").classList.add("alt-top"),t.target.classList.remove("in-view"),t.target.classList.add("out-of-view"))}))}),t);e.forEach((e=>{const t=e.getAttribute("data-delay");e.classList.add("out-of-view"),e.style.transitionDelay=t+"ms",n.observe(e)}))};"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",(function(){e()})):e()},554:()=>{const e=()=>{const e=document.getElementById("translate_menu");document.body.addEventListener("click",(t=>{t.target.closest(".translate_menu")||e.classList.remove("open")})),e.querySelector(".open-lang-menu").addEventListener("click",(t=>{t.preventDefault(),e.classList.toggle("open")}))};"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",(function(){e()})):e()},276:()=>{function e(){const e=document.querySelectorAll(".modal-trigger"),t=document.querySelectorAll(".modal .close"),o=document.body;function i(e){const t=e.target.getAttribute("data-target"),i=document.querySelector(t),n=i.querySelectorAll("a, input, button");o.classList.add("modal-open"),i.classList.add("modal-open"),i.setAttribute("aria-hidden",!1),0<n.length&&n[0].focus()}function n(e){const t=e.target.getAttribute("data-target"),i=document.querySelector(t),n=i.querySelector("iframe");if(o.classList.remove("modal-open"),i.classList.remove("modal-open"),i.setAttribute("aria-hidden",!0),n){const e=n.getAttribute("src");n.setAttribute("src",""),n.setAttribute("src",e)}}e.forEach((e=>{e.addEventListener("click",i)})),t.forEach((e=>{e.addEventListener("click",n)})),o.addEventListener("keydown",(function(e){if(!o.classList.contains("modal-open"))return;const t=document.querySelector(".modal.modal-open"),i=t.querySelector("iframe");if(27===e.keyCode&&(t.setAttribute("aria-hidden",!0),t.classList.remove("modal-open"),o.classList.remove("modal-open"),i)){const e=i.getAttribute("src");i.setAttribute("src",""),i.setAttribute("src",e)}})),o.addEventListener("click",(function(e){const t=e.target;if(o.classList.contains("modal-open")&&t.classList.contains("modal-open")){const e=t.querySelector("iframe");if(o.classList.remove("modal-open"),t.classList.remove("modal-open"),t.setAttribute("aria-hidden",!0),e){const t=e.getAttribute("src");e.setAttribute("src",""),e.setAttribute("src",t)}}}))}"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",e):e()},531:()=>{!function(){const e=document.querySelectorAll(".main-navigation .menu-item-has-children");function t(e){i(e.target.parentNode,".menu-item-has-children").forEach((e=>{e.classList.add("focus")}))}function o(e){i(e.target.parentNode,".menu-item-has-children").forEach((e=>{e.classList.remove("focus")}))}document.addEventListener("DOMContentLoaded",(function(){e.forEach((e=>{e.querySelector("a").innerHTML+='<span class="caret-down" aria-hidden="true"></span>'}))})),document.addEventListener("DOMContentLoaded",(function(){e.forEach((e=>{e.addEventListener("focusin",t),e.addEventListener("focusout",o)}))}));const i=function(e,t){Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(e){const t=(this.document||this.ownerDocument).querySelectorAll(e);let o=t.length;for(;0>=--o&&t.item(o)!==this;);return-1>o});const o=[];for(;e&&e!==document;e=e.parentNode)t?e.matches(t)&&o.push(e):o.push(e);return o}}()},188:()=>{document.querySelectorAll("table").forEach((e=>{const t=e.querySelectorAll("th");0!==t.length&&e.querySelectorAll("tbody tr").forEach((e=>{e.querySelectorAll("td").forEach(((e,o)=>{t[o].textContent&&e.setAttribute("data-label",t[o].textContent)}))}))}))},869:()=>{!function(){function e(e){const t=e.target.parentNode,o=t.querySelector(".video-background");t.classList.toggle("video-toggled"),t.classList.contains("video-toggled")?o.pause():o.play()}document.querySelectorAll(".video-toggle").forEach((t=>{t.addEventListener("click",e)}))}()}},t={};function o(i){var n=t[i];if(void 0!==n)return n.exports;var a=t[i]={exports:{}};return e[i](a,a.exports,o),a.exports}o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{"use strict";let e;o(821),o(73),o(74),o(276),o(531),o(188),o(869),o(348),o(222),o(554),e="undefined"!=typeof window?window:void 0!==o.g?o.g:"undefined"!=typeof self?self:{};var t=e;const{navigator:i}=t,n=/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(i.userAgent);let a,s;function r(){n?(!a&&document.body&&(a=document.createElement("div"),a.style.cssText="position: fixed; top: -9999px; left: 0; height: 100vh; width: 0;",document.body.appendChild(a)),s=(a?a.clientHeight:0)||t.innerHeight||document.documentElement.clientHeight):s=t.innerHeight||document.documentElement.clientHeight}var l;r(),t.addEventListener("resize",r),t.addEventListener("orientationchange",r),t.addEventListener("load",r),l=()=>{r()},"complete"===document.readyState||"interactive"===document.readyState?l():document.addEventListener("DOMContentLoaded",l,{capture:!0,once:!0,passive:!0});const c=[];function d(){c.length&&(c.forEach(((e,o)=>{const{instance:i,oldData:n}=e,a=i.$item.getBoundingClientRect(),r={width:a.width,height:a.height,top:a.top,bottom:a.bottom,wndW:t.innerWidth,wndH:s},l=!n||n.wndW!==r.wndW||n.wndH!==r.wndH||n.width!==r.width||n.height!==r.height,d=l||!n||n.top!==r.top||n.bottom!==r.bottom;c[o].oldData=r,l&&i.onResize(),d&&i.onScroll()})),t.requestAnimationFrame(d))}let m=0;class p{constructor(e,t){const o=this;o.instanceID=m,m+=1,o.$item=e,o.defaults={type:"scroll",speed:.5,imgSrc:null,imgElement:".jarallax-img",imgSize:"cover",imgPosition:"50% 50%",imgRepeat:"no-repeat",keepImg:!1,elementInViewport:null,zIndex:-100,disableParallax:!1,disableVideo:!1,videoSrc:null,videoStartTime:0,videoEndTime:0,videoVolume:0,videoLoop:!0,videoPlayOnlyVisible:!0,videoLazyLoading:!0,onScroll:null,onInit:null,onDestroy:null,onCoverImage:null};const n=o.$item.dataset||{},a={};if(Object.keys(n).forEach((e=>{const t=e.substr(0,1).toLowerCase()+e.substr(1);t&&void 0!==o.defaults[t]&&(a[t]=n[e])})),o.options=o.extend({},o.defaults,a,t),o.pureOptions=o.extend({},o.options),Object.keys(o.options).forEach((e=>{"true"===o.options[e]?o.options[e]=!0:"false"===o.options[e]&&(o.options[e]=!1)})),o.options.speed=Math.min(2,Math.max(-1,parseFloat(o.options.speed))),"string"==typeof o.options.disableParallax&&(o.options.disableParallax=new RegExp(o.options.disableParallax)),o.options.disableParallax instanceof RegExp){const e=o.options.disableParallax;o.options.disableParallax=()=>e.test(i.userAgent)}if("function"!=typeof o.options.disableParallax&&(o.options.disableParallax=()=>!1),"string"==typeof o.options.disableVideo&&(o.options.disableVideo=new RegExp(o.options.disableVideo)),o.options.disableVideo instanceof RegExp){const e=o.options.disableVideo;o.options.disableVideo=()=>e.test(i.userAgent)}"function"!=typeof o.options.disableVideo&&(o.options.disableVideo=()=>!1);let s=o.options.elementInViewport;s&&"object"==typeof s&&void 0!==s.length&&([s]=s),s instanceof Element||(s=null),o.options.elementInViewport=s,o.image={src:o.options.imgSrc||null,$container:null,useImgTag:!1,position:"fixed"},o.initImg()&&o.canInitParallax()&&o.init()}css(e,o){return"string"==typeof o?t.getComputedStyle(e).getPropertyValue(o):(Object.keys(o).forEach((t=>{e.style[t]=o[t]})),e)}extend(e,...t){return e=e||{},Object.keys(t).forEach((o=>{t[o]&&Object.keys(t[o]).forEach((i=>{e[i]=t[o][i]}))})),e}getWindowData(){return{width:t.innerWidth||document.documentElement.clientWidth,height:s,y:document.documentElement.scrollTop}}initImg(){const e=this;let t=e.options.imgElement;return t&&"string"==typeof t&&(t=e.$item.querySelector(t)),t instanceof Element||(e.options.imgSrc?(t=new Image,t.src=e.options.imgSrc):t=null),t&&(e.options.keepImg?e.image.$item=t.cloneNode(!0):(e.image.$item=t,e.image.$itemParent=t.parentNode),e.image.useImgTag=!0),!(!e.image.$item&&(null===e.image.src&&(e.image.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",e.image.bgImage=e.css(e.$item,"background-image")),!e.image.bgImage||"none"===e.image.bgImage))}canInitParallax(){return!this.options.disableParallax()}init(){const e=this,o={position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"};let i={pointerEvents:"none",transformStyle:"preserve-3d",backfaceVisibility:"hidden"};if(!e.options.keepImg){const t=e.$item.getAttribute("style");if(t&&e.$item.setAttribute("data-jarallax-original-styles",t),e.image.useImgTag){const t=e.image.$item.getAttribute("style");t&&e.image.$item.setAttribute("data-jarallax-original-styles",t)}}if("static"===e.css(e.$item,"position")&&e.css(e.$item,{position:"relative"}),"auto"===e.css(e.$item,"z-index")&&e.css(e.$item,{zIndex:0}),e.image.$container=document.createElement("div"),e.css(e.image.$container,o),e.css(e.image.$container,{"z-index":e.options.zIndex}),"fixed"===this.image.position&&e.css(e.image.$container,{"-webkit-clip-path":"polygon(0 0, 100% 0, 100% 100%, 0 100%)","clip-path":"polygon(0 0, 100% 0, 100% 100%, 0 100%)"}),e.image.$container.setAttribute("id",`jarallax-container-${e.instanceID}`),e.$item.appendChild(e.image.$container),e.image.useImgTag?i=e.extend({"object-fit":e.options.imgSize,"object-position":e.options.imgPosition,"max-width":"none"},o,i):(e.image.$item=document.createElement("div"),e.image.src&&(i=e.extend({"background-position":e.options.imgPosition,"background-size":e.options.imgSize,"background-repeat":e.options.imgRepeat,"background-image":e.image.bgImage||`url("${e.image.src}")`},o,i))),"opacity"!==e.options.type&&"scale"!==e.options.type&&"scale-opacity"!==e.options.type&&1!==e.options.speed||(e.image.position="absolute"),"fixed"===e.image.position){const o=function(e){const t=[];for(;null!==e.parentElement;)1===(e=e.parentElement).nodeType&&t.push(e);return t}(e.$item).filter((e=>{const o=t.getComputedStyle(e),i=o["-webkit-transform"]||o["-moz-transform"]||o.transform;return i&&"none"!==i||/(auto|scroll)/.test(o.overflow+o["overflow-y"]+o["overflow-x"])}));e.image.position=o.length?"absolute":"fixed"}i.position=e.image.position,e.css(e.image.$item,i),e.image.$container.appendChild(e.image.$item),e.onResize(),e.onScroll(!0),e.options.onInit&&e.options.onInit.call(e),"none"!==e.css(e.$item,"background-image")&&e.css(e.$item,{"background-image":"none"}),e.addToParallaxList()}addToParallaxList(){c.push({instance:this}),1===c.length&&t.requestAnimationFrame(d)}removeFromParallaxList(){const e=this;c.forEach(((t,o)=>{t.instance.instanceID===e.instanceID&&c.splice(o,1)}))}destroy(){const e=this;e.removeFromParallaxList();const t=e.$item.getAttribute("data-jarallax-original-styles");if(e.$item.removeAttribute("data-jarallax-original-styles"),t?e.$item.setAttribute("style",t):e.$item.removeAttribute("style"),e.image.useImgTag){const o=e.image.$item.getAttribute("data-jarallax-original-styles");e.image.$item.removeAttribute("data-jarallax-original-styles"),o?e.image.$item.setAttribute("style",t):e.image.$item.removeAttribute("style"),e.image.$itemParent&&e.image.$itemParent.appendChild(e.image.$item)}e.image.$container&&e.image.$container.parentNode.removeChild(e.image.$container),e.options.onDestroy&&e.options.onDestroy.call(e),delete e.$item.jarallax}clipContainer(){}coverImage(){const e=this,t=e.image.$container.getBoundingClientRect(),o=t.height,{speed:i}=e.options,n="scroll"===e.options.type||"scroll-opacity"===e.options.type;let a=0,r=o,l=0;return n&&(0>i?(a=i*Math.max(o,s),s<o&&(a-=i*(o-s))):a=i*(o+s),1<i?r=Math.abs(a-s):0>i?r=a/i+Math.abs(a):r+=(s-o)*(1-i),a/=2),e.parallaxScrollDistance=a,l=n?(s-r)/2:(o-r)/2,e.css(e.image.$item,{height:`${r}px`,marginTop:`${l}px`,left:"fixed"===e.image.position?`${t.left}px`:"0",width:`${t.width}px`}),e.options.onCoverImage&&e.options.onCoverImage.call(e),{image:{height:r,marginTop:l},container:t}}isVisible(){return this.isElementInViewport||!1}onScroll(e){const o=this,i=o.$item.getBoundingClientRect(),n=i.top,a=i.height,r={};let l=i;if(o.options.elementInViewport&&(l=o.options.elementInViewport.getBoundingClientRect()),o.isElementInViewport=0<=l.bottom&&0<=l.right&&l.top<=s&&l.left<=t.innerWidth,!e&&!o.isElementInViewport)return;const c=Math.max(0,n),d=Math.max(0,a+n),m=Math.max(0,-n),p=Math.max(0,n+a-s),u=Math.max(0,a-(n+a-s)),g=Math.max(0,-n+s-a),b=1-(s-n)/(s+a)*2;let h=1;if(a<s?h=1-(m||p)/a:d<=s?h=d/s:u<=s&&(h=u/s),"opacity"!==o.options.type&&"scale-opacity"!==o.options.type&&"scroll-opacity"!==o.options.type||(r.transform="translate3d(0,0,0)",r.opacity=h),"scale"===o.options.type||"scale-opacity"===o.options.type){let e=1;0>o.options.speed?e-=o.options.speed*h:e+=o.options.speed*(1-h),r.transform=`scale(${e}) translate3d(0,0,0)`}if("scroll"===o.options.type||"scroll-opacity"===o.options.type){let e=o.parallaxScrollDistance*b;"absolute"===o.image.position&&(e-=n),r.transform=`translate3d(0,${e}px,0)`}o.css(o.image.$item,r),o.options.onScroll&&o.options.onScroll.call(o,{section:i,beforeTop:c,beforeTopEnd:d,afterTop:m,beforeBottom:p,beforeBottomEnd:u,afterBottom:g,visiblePercent:h,fromViewportCenter:b})}onResize(){this.coverImage()}}const u=function(e,t,...o){("object"==typeof HTMLElement?e instanceof HTMLElement:e&&"object"==typeof e&&null!==e&&1===e.nodeType&&"string"==typeof e.nodeName)&&(e=[e]);const i=e.length;let n,a=0;for(;a<i;a+=1)if("object"==typeof t||void 0===t?e[a].jarallax||(e[a].jarallax=new p(e[a],t)):e[a].jarallax&&(n=e[a].jarallax[t].apply(e[a].jarallax,o)),void 0!==n)return n;return e};let g;u.constructor=p,g="undefined"!=typeof window?window:void 0!==o.g?o.g:"undefined"!=typeof self?self:{};const b=u;"complete"!==document.readyState&&"loading"===document.readyState||document.documentElement.doScroll?document.addEventListener("DOMContentLoaded",f):f();const h={type:"scroll",speed:.85,imgSize:"fit",imgPosition:"50% 50%"};function f(){const e=document.querySelectorAll(".wp-block-cover.lax");document.body.classList.contains("is-mobile")||(e.forEach((function(e){e.classList.add("jarallax"),e.querySelector("img").classList.add("jarallax-img")})),b(e,h))}o(913)})()})();