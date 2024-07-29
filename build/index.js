(()=>{"use strict";var e={20:(e,o,l)=>{var t=l(609),n=Symbol.for("react.element"),r=(Symbol.for("react.fragment"),Object.prototype.hasOwnProperty),a=t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,i={key:!0,ref:!0,__self:!0,__source:!0};function s(e,o,l){var t,s={},d=null,u=null;for(t in void 0!==l&&(d=""+l),void 0!==o.key&&(d=""+o.key),void 0!==o.ref&&(u=o.ref),o)r.call(o,t)&&!i.hasOwnProperty(t)&&(s[t]=o[t]);if(e&&e.defaultProps)for(t in o=e.defaultProps)void 0===s[t]&&(s[t]=o[t]);return{$$typeof:n,type:e,key:d,ref:u,props:s,_owner:a.current}}o.jsx=s,o.jsxs=s},848:(e,o,l)=>{e.exports=l(20)},609:e=>{e.exports=window.React}},o={};function l(t){var n=o[t];if(void 0!==n)return n.exports;var r=o[t]={exports:{}};return e[t](r,r.exports,l),r.exports}var t=l(609);const n=window.wp.i18n,r=window.wp.plugins,a=window.wp.components,i=window.wp.element,s=window.wp.primitives;var d=l(848);const u=(0,d.jsxs)(s.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",children:[(0,d.jsx)(s.Path,{d:"m19 7.5h-7.628c-.3089-.87389-1.1423-1.5-2.122-1.5-.97966 0-1.81309.62611-2.12197 1.5h-2.12803v1.5h2.12803c.30888.87389 1.14231 1.5 2.12197 1.5.9797 0 1.8131-.62611 2.122-1.5h7.628z"}),(0,d.jsx)(s.Path,{d:"m19 15h-2.128c-.3089-.8739-1.1423-1.5-2.122-1.5s-1.8131.6261-2.122 1.5h-7.628v1.5h7.628c.3089.8739 1.1423 1.5 2.122 1.5s1.8131-.6261 2.122-1.5h2.128z"})]}),c=window.wp.editPost;window.editorUnificationPostEditor&&(0,r.registerPlugin)("dhe-editor-unification-post-editor-slot",{render:function(){const[e,o]=(0,i.useState)(!1),[l,r]=(0,i.useState)(null),[s,d]=(0,i.useState)(null);return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(c.PluginMoreMenuItem,{icon:u,onClick:()=>o(!0),className:"dhe-editor-unification-post-editor-button"},(0,n.__)("Post Editor Settings","developer-hours-examples")),e&&(0,t.createElement)(a.Modal,{className:"dhe-editor-unification-modal-container",title:(0,n.__)("Manage Post Editor Settings","developer-hours-examples"),onRequestClose:()=>o(!1),size:"large"},(0,t.createElement)(a.TextControl,{label:(0,n.__)("Text Field","developer-hours-examples"),onChange:e=>console.log(e)}),(0,t.createElement)(a.RadioControl,{label:(0,n.__)("Radio Field","developer-hours-examples"),selected:l,options:[{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{r(e),console.log(e)}}),(0,t.createElement)(a.SelectControl,{label:(0,n.__)("Select Field","developer-hours-examples"),value:s,options:[{disabled:!0,label:(0,n.__)("Select an Option","developer-hours-examples"),value:""},{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{d(e),console.log(e)}})))}});const p=window.wp.editSite;window.editorUnificationSiteEditor&&(0,r.registerPlugin)("dhe-editor-unification-site-editor-slot",{render:function(){const[e,o]=(0,i.useState)(!1),[l,r]=(0,i.useState)(null),[s,d]=(0,i.useState)(null);return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(p.PluginMoreMenuItem,{icon:u,onClick:()=>o(!0),className:"dhe-editor-unification-site-editor-button"},(0,n.__)("Site Editor Settings","developer-hours-examples")),e&&(0,t.createElement)(a.Modal,{className:"dhe-editor-unification-modal-container",title:(0,n.__)("Manage Site Editor Settings","developer-hours-examples"),onRequestClose:()=>o(!1),size:"large"},(0,t.createElement)(a.TextControl,{label:(0,n.__)("Text Field","developer-hours-examples"),onChange:e=>console.log(e)}),(0,t.createElement)(a.RadioControl,{label:(0,n.__)("Radio Field","developer-hours-examples"),selected:l,options:[{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{r(e),console.log(e)}}),(0,t.createElement)(a.SelectControl,{label:(0,n.__)("Select Field","developer-hours-examples"),value:s,options:[{disabled:!0,label:(0,n.__)("Select an Option","developer-hours-examples"),value:""},{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{d(e),console.log(e)}})))}});const m=window.wp.editor;window.editorUnificationUnified&&(0,r.registerPlugin)("dhe-editor-unification-unified-slot",{render:function(){const[e,o]=(0,i.useState)(!1),[l,r]=(0,i.useState)(null),[s,d]=(0,i.useState)(null);return(0,t.createElement)(t.Fragment,null,m.PluginMoreMenuItem?(0,t.createElement)(m.PluginMoreMenuItem,{icon:u,onClick:()=>o(!0),className:"dhe-editor-unification-unified-button-6-6"},(0,n.__)("Plugin Settings (Unified)","developer-hours-examples")):(0,t.createElement)(t.Fragment,null,(0,t.createElement)(c.PluginMoreMenuItem,{icon:u,onClick:()=>o(!0),className:"dhe-editor-unification-unified-button"},(0,n.__)("Plugin Settings (Post Editor)","developer-hours-examples")),(0,t.createElement)(p.PluginMoreMenuItem,{icon:u,onClick:()=>o(!0),className:"dhe-editor-unification-unified-button"},(0,n.__)("Plugin Settings (Site Editor)","developer-hours-examples"))),e&&(0,t.createElement)(a.Modal,{className:"dhe-editor-unification-modal-container",title:(0,n.__)("Manage Plugin Settings","developer-hours-examples"),onRequestClose:()=>o(!1),size:"large"},(0,t.createElement)(a.TextControl,{label:(0,n.__)("Text Field","developer-hours-examples"),onChange:e=>console.log(e)}),(0,t.createElement)(a.RadioControl,{label:(0,n.__)("Radio Field","developer-hours-examples"),selected:l,options:[{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{r(e),console.log(e)}}),(0,t.createElement)(a.SelectControl,{label:(0,n.__)("Select Field","developer-hours-examples"),value:s,options:[{disabled:!0,label:(0,n.__)("Select an Option","developer-hours-examples"),value:""},{label:(0,n.__)("Option A","developer-hours-examples"),value:"a"},{label:(0,n.__)("Option B","developer-hours-examples"),value:"b"},{label:(0,n.__)("Option C","developer-hours-examples"),value:"c"}],onChange:e=>{d(e),console.log(e)}})))}});const _=window.wp.hooks,v=window.wp.blockEditor;(0,_.addFilter)("editor.BlockEdit","example/add-image-inspector-controls",(function(e){return o=>{if("core/image"!==o.name)return(0,t.createElement)(e,{...o});const{attributes:l,setAttributes:r}=o,{isDecorative:i}=l;return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(e,{...o}),(0,t.createElement)(v.InspectorControls,null,(0,t.createElement)(a.PanelBody,{title:(0,n.__)("Accessibility","developer-hours-examples")},(0,t.createElement)(a.PanelRow,null,(0,t.createElement)(a.ToggleControl,{label:(0,n.__)("Image is decorative","developer-hours-examples"),checked:i,onChange:()=>{r({isDecorative:!i})},help:(0,t.createElement)(t.Fragment,null,(0,n.__)("Decorative images don't add information to the content of a page. ","developer-hours-examples"),(0,t.createElement)(a.ExternalLink,{href:"https://www.w3.org/WAI/tutorials/images/decorative/"},(0,n.__)("Learn more.","developer-hours-examples")))})))))}})),(0,_.addFilter)("blocks.registerBlockType","enable-button-icons/add-attributes",(function(e){return"core/image"!==e.name?e:{...e,attributes:{...e.attributes,isDecorative:{type:"boolean",default:!1}}}})),(0,_.addFilter)("blocks.getSaveElement","example/add-accessibility-role-to-images",(function(e,o,l){const{name:t}=o,{isDecorative:n}=l,r=e=>i.Children.map(e,(e=>"img"===e?.type?(0,i.cloneElement)(e,{role:"presentation"}):e?.props?.children?(0,i.cloneElement)(e,{children:r(e.props.children)}):e));if(e)return"core/image"===t&&n?(0,i.cloneElement)(e,{children:r(e.props.children)}):e})),(0,_.addFilter)("blocks.getSaveContent.extraProps","example/add-accessibility-role-to-image-blocks",(function(e,o,l){const{name:t}=o,{isDecorative:n}=l;return"core/image"===t&&n?{...e,role:"presentation"}:e}))})();