import{r as n,c as l,Y as s,u as r,S as a,F as c,o as d,a as t,M as u,W as f,a5 as _}from"./@vue-CiBlh0uF.js";import{T as w,Z as g}from"./@inertiajs-mmGPErgV.js";import{A as b}from"./AuthenticationCard-CJywNOZF.js";import{_ as h}from"./AuthenticationCardLogo-DbmCPWis.js";import{_ as x}from"./InputError-D_RmDawB.js";import{_ as v}from"./InputLabel-CMT4UJ6z.js";import{_ as y}from"./PrimaryButton-C-JDX3-N.js";import{_ as V}from"./TextInput-BZXBD8jt.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const C=t("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),$={class:"flex justify-end mt-4"},to={__name:"ConfirmPassword",setup(k){const o=w({password:""}),e=n(null),m=()=>{o.post(route("password.confirm"),{onFinish:()=>{o.reset(),e.value.focus()}})};return(A,i)=>(d(),l(c,null,[s(r(g),{title:"Secure Area"}),s(b,null,{logo:a(()=>[s(h)]),default:a(()=>[C,t("form",{onSubmit:_(m,["prevent"])},[t("div",null,[s(v,{for:"password",value:"Password"}),s(V,{id:"password",ref_key:"passwordInput",ref:e,modelValue:r(o).password,"onUpdate:modelValue":i[0]||(i[0]=p=>r(o).password=p),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),s(x,{class:"mt-2",message:r(o).errors.password},null,8,["message"])]),t("div",$,[s(y,{class:u(["ms-4",{"opacity-25":r(o).processing}]),disabled:r(o).processing},{default:a(()=>[f(" Confirm ")]),_:1},8,["class","disabled"])])],32)]),_:1})],64))}};export{to as default};
