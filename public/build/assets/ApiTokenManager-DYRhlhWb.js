import{T as y}from"./@inertiajs-mmGPErgV.js";import{_ as L}from"./ActionMessage-BANSHUhL.js";import{_ as N,a as z,b as T}from"./DialogModal-BT8JBYLA.js";import{_ as S}from"./Checkbox-BGiAsOrV.js";import{o as i,R as U,S as e,a as t,L as x,r as b,c as m,Y as o,V as g,W as l,u as a,F as $,ab as w,M as C,X as h}from"./@vue-CiBlh0uF.js";import{_ as W}from"./DangerButton-CqI9Vbs4.js";import{_ as Y}from"./FormSection-5SNgBWLN.js";import{_ as E}from"./InputError-D_RmDawB.js";import{_ as B}from"./InputLabel-CMT4UJ6z.js";import{_ as I}from"./PrimaryButton-C-JDX3-N.js";import{_ as A}from"./SecondaryButton-bx6cUwtY.js";import{S as H}from"./SectionBorder-D84Qa1Pe.js";import{_ as R}from"./TextInput-BZXBD8jt.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./SectionTitle-CUvA85I3.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const X={class:"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"},q={class:"sm:flex sm:items-start"},G=t("div",{class:"mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"},[t("svg",{class:"h-6 w-6 text-red-600",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"})])],-1),J={class:"mt-3 text-center sm:mt-0 sm:ms-4 sm:text-start"},K={class:"text-lg font-medium text-gray-900"},O={class:"mt-4 text-sm text-gray-600"},Q={class:"flex flex-row justify-end px-6 py-4 bg-gray-100 text-end"},Z={__name:"ConfirmationModal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(c,{emit:P}){const r=P,d=()=>{r("close")};return(u,v)=>(i(),U(N,{show:c.show,"max-width":c.maxWidth,closeable:c.closeable,onClose:d},{default:e(()=>[t("div",X,[t("div",q,[G,t("div",J,[t("h3",K,[x(u.$slots,"title")]),t("div",O,[x(u.$slots,"content")])])])]),t("div",Q,[x(u.$slots,"footer")])]),_:3},8,["show","max-width","closeable"]))}},ee={class:"col-span-6 sm:col-span-4"},se={key:0,class:"col-span-6"},te={class:"mt-2 grid grid-cols-1 md:grid-cols-2 gap-4"},oe={class:"flex items-center"},ne={class:"ms-2 text-sm text-gray-600"},le={key:0},ae={class:"mt-10 sm:mt-0"},ie={class:"space-y-6"},re={class:"break-all"},me={class:"flex items-center ms-2"},ce={key:0,class:"text-sm text-gray-400"},de=["onClick"],ue=["onClick"],pe=t("div",null," Please copy your new API token. For your security, it won't be shown again. ",-1),fe={key:0,class:"mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 break-all"},_e={class:"grid grid-cols-1 md:grid-cols-2 gap-4"},ve={class:"flex items-center"},ke={class:"ms-2 text-sm text-gray-600"},Ze={__name:"ApiTokenManager",props:{tokens:Array,availablePermissions:Array,defaultPermissions:Array},setup(c){const r=y({name:"",permissions:c.defaultPermissions}),d=y({permissions:[]}),u=y({}),v=b(!1),f=b(null),_=b(null),V=()=>{r.post(route("api-tokens.store"),{preserveScroll:!0,onSuccess:()=>{v.value=!0,r.reset()}})},F=p=>{d.permissions=p.abilities,f.value=p},j=()=>{d.put(route("api-tokens.update",f.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>f.value=null})},D=p=>{_.value=p},M=()=>{u.delete(route("api-tokens.destroy",_.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>_.value=null})};return(p,n)=>(i(),m("div",null,[o(Y,{onSubmitted:V},{title:e(()=>[l(" Create API Token ")]),description:e(()=>[l(" API tokens allow third-party services to authenticate with our application on your behalf. ")]),form:e(()=>[t("div",ee,[o(B,{for:"name",value:"Name"}),o(R,{id:"name",modelValue:a(r).name,"onUpdate:modelValue":n[0]||(n[0]=s=>a(r).name=s),type:"text",class:"mt-1 block w-full",autofocus:""},null,8,["modelValue"]),o(E,{message:a(r).errors.name,class:"mt-2"},null,8,["message"])]),c.availablePermissions.length>0?(i(),m("div",se,[o(B,{for:"permissions",value:"Permissions"}),t("div",te,[(i(!0),m($,null,w(c.availablePermissions,s=>(i(),m("div",{key:s},[t("label",oe,[o(S,{checked:a(r).permissions,"onUpdate:checked":n[1]||(n[1]=k=>a(r).permissions=k),value:s},null,8,["checked","value"]),t("span",ne,h(s),1)])]))),128))])])):g("",!0)]),actions:e(()=>[o(L,{on:a(r).recentlySuccessful,class:"me-3"},{default:e(()=>[l(" Created. ")]),_:1},8,["on"]),o(I,{class:C({"opacity-25":a(r).processing}),disabled:a(r).processing},{default:e(()=>[l(" Create ")]),_:1},8,["class","disabled"])]),_:1}),c.tokens.length>0?(i(),m("div",le,[o(H),t("div",ae,[o(z,null,{title:e(()=>[l(" Manage API Tokens ")]),description:e(()=>[l(" You may delete any of your existing tokens if they are no longer needed. ")]),content:e(()=>[t("div",ie,[(i(!0),m($,null,w(c.tokens,s=>(i(),m("div",{key:s.id,class:"flex items-center justify-between"},[t("div",re,h(s.name),1),t("div",me,[s.last_used_ago?(i(),m("div",ce," Last used "+h(s.last_used_ago),1)):g("",!0),c.availablePermissions.length>0?(i(),m("button",{key:1,class:"cursor-pointer ms-6 text-sm text-gray-400 underline",onClick:k=>F(s)}," Permissions ",8,de)):g("",!0),t("button",{class:"cursor-pointer ms-6 text-sm text-red-500",onClick:k=>D(s)}," Delete ",8,ue)])]))),128))])]),_:1})])])):g("",!0),o(T,{show:v.value,onClose:n[3]||(n[3]=s=>v.value=!1)},{title:e(()=>[l(" API Token ")]),content:e(()=>[pe,p.$page.props.jetstream.flash.token?(i(),m("div",fe,h(p.$page.props.jetstream.flash.token),1)):g("",!0)]),footer:e(()=>[o(A,{onClick:n[2]||(n[2]=s=>v.value=!1)},{default:e(()=>[l(" Close ")]),_:1})]),_:1},8,["show"]),o(T,{show:f.value!=null,onClose:n[6]||(n[6]=s=>f.value=null)},{title:e(()=>[l(" API Token Permissions ")]),content:e(()=>[t("div",_e,[(i(!0),m($,null,w(c.availablePermissions,s=>(i(),m("div",{key:s},[t("label",ve,[o(S,{checked:a(d).permissions,"onUpdate:checked":n[4]||(n[4]=k=>a(d).permissions=k),value:s},null,8,["checked","value"]),t("span",ke,h(s),1)])]))),128))])]),footer:e(()=>[o(A,{onClick:n[5]||(n[5]=s=>f.value=null)},{default:e(()=>[l(" Cancel ")]),_:1}),o(I,{class:C(["ms-3",{"opacity-25":a(d).processing}]),disabled:a(d).processing,onClick:j},{default:e(()=>[l(" Save ")]),_:1},8,["class","disabled"])]),_:1},8,["show"]),o(Z,{show:_.value!=null,onClose:n[8]||(n[8]=s=>_.value=null)},{title:e(()=>[l(" Delete API Token ")]),content:e(()=>[l(" Are you sure you would like to delete this API token? ")]),footer:e(()=>[o(A,{onClick:n[7]||(n[7]=s=>_.value=null)},{default:e(()=>[l(" Cancel ")]),_:1}),o(W,{class:C(["ms-3",{"opacity-25":a(u).processing}]),disabled:a(u).processing,onClick:M},{default:e(()=>[l(" Delete ")]),_:1},8,["class","disabled"])]),_:1},8,["show"])]))}};export{Ze as default};
