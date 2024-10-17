import{T as x}from"./@inertiajs-BgBGItYw.js";import{_ as L}from"./ActionMessage-BAovtbNO.js";import{_ as N,a as U,b as T}from"./DialogModal-DVZ-bMsS.js";import{f as z,T as W,ai as Y,o as c,c as m,R as E,S as e,a as t,L as b,r as w,Y as o,V as h,W as n,u as r,F as $,ab as C,M as A,X as g}from"./@vue-B1CVMTK9.js";import{_ as H}from"./DangerButton-DHxd5rH1.js";import{_ as R}from"./FormSection-D5iUOCFx.js";import{_ as X}from"./InputError-Cdm0MI_H.js";import{_ as S}from"./InputLabel-Av1BZmNz.js";import{_ as B}from"./PrimaryButton-D8YeF2wd.js";import{_ as P}from"./SecondaryButton-D1C-je09.js";import{S as q}from"./SectionBorder-BDHAOXn9.js";import{_ as G}from"./TextInput-KsQ8oEBW.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./SectionTitle-kJ-XoBXn.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const J=["value"],V={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{type:String,default:null}},emits:["update:checked"],setup(l,{emit:y}){const i=y,d=l,u=z({get(){return d.checked},set(f){i("update:checked",f)}});return(f,p)=>W((c(),m("input",{"onUpdate:modelValue":p[0]||(p[0]=v=>u.value=v),type:"checkbox",value:l.value,class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"},null,8,J)),[[Y,u.value]])}},K={class:"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"},O={class:"sm:flex sm:items-start"},Q=t("div",{class:"mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"},[t("svg",{class:"h-6 w-6 text-red-600",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"})])],-1),Z={class:"mt-3 text-center sm:mt-0 sm:ms-4 sm:text-start"},ee={class:"text-lg font-medium text-gray-900"},se={class:"mt-4 text-sm text-gray-600"},te={class:"flex flex-row justify-end px-6 py-4 bg-gray-100 text-end"},oe={__name:"ConfirmationModal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(l,{emit:y}){const i=y,d=()=>{i("close")};return(u,f)=>(c(),E(N,{show:l.show,"max-width":l.maxWidth,closeable:l.closeable,onClose:d},{default:e(()=>[t("div",K,[t("div",O,[Q,t("div",Z,[t("h3",ee,[b(u.$slots,"title")]),t("div",se,[b(u.$slots,"content")])])])]),t("div",te,[b(u.$slots,"footer")])]),_:3},8,["show","max-width","closeable"]))}},ae={class:"col-span-6 sm:col-span-4"},ne={key:0,class:"col-span-6"},le={class:"mt-2 grid grid-cols-1 md:grid-cols-2 gap-4"},ie={class:"flex items-center"},re={class:"ms-2 text-sm text-gray-600"},ce={key:0},me={class:"mt-10 sm:mt-0"},de={class:"space-y-6"},ue={class:"break-all"},pe={class:"flex items-center ms-2"},fe={key:0,class:"text-sm text-gray-400"},ve=["onClick"],_e=["onClick"],ke=t("div",null," Please copy your new API token. For your security, it won't be shown again. ",-1),he={key:0,class:"mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500 break-all"},ge={class:"grid grid-cols-1 md:grid-cols-2 gap-4"},ye={class:"flex items-center"},xe={class:"ms-2 text-sm text-gray-600"},ts={__name:"ApiTokenManager",props:{tokens:Array,availablePermissions:Array,defaultPermissions:Array},setup(l){const i=x({name:"",permissions:l.defaultPermissions}),d=x({permissions:[]}),u=x({}),f=w(!1),p=w(null),v=w(null),I=()=>{i.post(route("api-tokens.store"),{preserveScroll:!0,onSuccess:()=>{f.value=!0,i.reset()}})},D=_=>{d.permissions=_.abilities,p.value=_},F=()=>{d.put(route("api-tokens.update",p.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>p.value=null})},M=_=>{v.value=_},j=()=>{u.delete(route("api-tokens.destroy",v.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>v.value=null})};return(_,a)=>(c(),m("div",null,[o(R,{onSubmitted:I},{title:e(()=>[n(" Create API Token ")]),description:e(()=>[n(" API tokens allow third-party services to authenticate with our application on your behalf. ")]),form:e(()=>[t("div",ae,[o(S,{for:"name",value:"Name"}),o(G,{id:"name",modelValue:r(i).name,"onUpdate:modelValue":a[0]||(a[0]=s=>r(i).name=s),type:"text",class:"mt-1 block w-full",autofocus:""},null,8,["modelValue"]),o(X,{message:r(i).errors.name,class:"mt-2"},null,8,["message"])]),l.availablePermissions.length>0?(c(),m("div",ne,[o(S,{for:"permissions",value:"Permissions"}),t("div",le,[(c(!0),m($,null,C(l.availablePermissions,s=>(c(),m("div",{key:s},[t("label",ie,[o(V,{checked:r(i).permissions,"onUpdate:checked":a[1]||(a[1]=k=>r(i).permissions=k),value:s},null,8,["checked","value"]),t("span",re,g(s),1)])]))),128))])])):h("",!0)]),actions:e(()=>[o(L,{on:r(i).recentlySuccessful,class:"me-3"},{default:e(()=>[n(" Created. ")]),_:1},8,["on"]),o(B,{class:A({"opacity-25":r(i).processing}),disabled:r(i).processing},{default:e(()=>[n(" Create ")]),_:1},8,["class","disabled"])]),_:1}),l.tokens.length>0?(c(),m("div",ce,[o(q),t("div",me,[o(U,null,{title:e(()=>[n(" Manage API Tokens ")]),description:e(()=>[n(" You may delete any of your existing tokens if they are no longer needed. ")]),content:e(()=>[t("div",de,[(c(!0),m($,null,C(l.tokens,s=>(c(),m("div",{key:s.id,class:"flex items-center justify-between"},[t("div",ue,g(s.name),1),t("div",pe,[s.last_used_ago?(c(),m("div",fe," Last used "+g(s.last_used_ago),1)):h("",!0),l.availablePermissions.length>0?(c(),m("button",{key:1,class:"cursor-pointer ms-6 text-sm text-gray-400 underline",onClick:k=>D(s)}," Permissions ",8,ve)):h("",!0),t("button",{class:"cursor-pointer ms-6 text-sm text-red-500",onClick:k=>M(s)}," Delete ",8,_e)])]))),128))])]),_:1})])])):h("",!0),o(T,{show:f.value,onClose:a[3]||(a[3]=s=>f.value=!1)},{title:e(()=>[n(" API Token ")]),content:e(()=>[ke,_.$page.props.jetstream.flash.token?(c(),m("div",he,g(_.$page.props.jetstream.flash.token),1)):h("",!0)]),footer:e(()=>[o(P,{onClick:a[2]||(a[2]=s=>f.value=!1)},{default:e(()=>[n(" Close ")]),_:1})]),_:1},8,["show"]),o(T,{show:p.value!=null,onClose:a[6]||(a[6]=s=>p.value=null)},{title:e(()=>[n(" API Token Permissions ")]),content:e(()=>[t("div",ge,[(c(!0),m($,null,C(l.availablePermissions,s=>(c(),m("div",{key:s},[t("label",ye,[o(V,{checked:r(d).permissions,"onUpdate:checked":a[4]||(a[4]=k=>r(d).permissions=k),value:s},null,8,["checked","value"]),t("span",xe,g(s),1)])]))),128))])]),footer:e(()=>[o(P,{onClick:a[5]||(a[5]=s=>p.value=null)},{default:e(()=>[n(" Cancel ")]),_:1}),o(B,{class:A(["ms-3",{"opacity-25":r(d).processing}]),disabled:r(d).processing,onClick:F},{default:e(()=>[n(" Save ")]),_:1},8,["class","disabled"])]),_:1},8,["show"]),o(oe,{show:v.value!=null,onClose:a[8]||(a[8]=s=>v.value=null)},{title:e(()=>[n(" Delete API Token ")]),content:e(()=>[n(" Are you sure you would like to delete this API token? ")]),footer:e(()=>[o(P,{onClick:a[7]||(a[7]=s=>v.value=null)},{default:e(()=>[n(" Cancel ")]),_:1}),o(H,{class:A(["ms-3",{"opacity-25":r(u).processing}]),disabled:r(u).processing,onClick:j},{default:e(()=>[n(" Delete ")]),_:1},8,["class","disabled"])]),_:1},8,["show"])]))}};export{ts as default};
