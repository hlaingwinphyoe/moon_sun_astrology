import{c,Y as s,u as e,S as m,F as f,o as w,a as t,M as _,W as g,a5 as V}from"./@vue-CiBlh0uF.js";import{T as k,Z as v}from"./@inertiajs-mmGPErgV.js";import{A as b}from"./AuthenticationCard-CJywNOZF.js";import{_ as x}from"./AuthenticationCardLogo-DbmCPWis.js";import{_ as i}from"./InputError-D_RmDawB.js";import{_ as l}from"./InputLabel-CMT4UJ6z.js";import{_ as y}from"./PrimaryButton-C-JDX3-N.js";import{_ as p}from"./TextInput-BZXBD8jt.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const P={class:"mt-4"},$={class:"mt-4"},C={class:"flex items-center justify-end mt-4"},ao={__name:"ResetPassword",props:{email:String,token:String},setup(d){const n=d,o=k({token:n.token,email:n.email,password:"",password_confirmation:""}),u=()=>{o.post(route("password.update"),{onFinish:()=>o.reset("password","password_confirmation")})};return(S,a)=>(w(),c(f,null,[s(e(v),{title:"Reset Password"}),s(b,null,{logo:m(()=>[s(x)]),default:m(()=>[t("form",{onSubmit:V(u,["prevent"])},[t("div",null,[s(l,{for:"email",value:"Email"}),s(p,{id:"email",modelValue:e(o).email,"onUpdate:modelValue":a[0]||(a[0]=r=>e(o).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),s(i,{class:"mt-2",message:e(o).errors.email},null,8,["message"])]),t("div",P,[s(l,{for:"password",value:"Password"}),s(p,{id:"password",modelValue:e(o).password,"onUpdate:modelValue":a[1]||(a[1]=r=>e(o).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),s(i,{class:"mt-2",message:e(o).errors.password},null,8,["message"])]),t("div",$,[s(l,{for:"password_confirmation",value:"Confirm Password"}),s(p,{id:"password_confirmation",modelValue:e(o).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=r=>e(o).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),s(i,{class:"mt-2",message:e(o).errors.password_confirmation},null,8,["message"])]),t("div",C,[s(y,{class:_({"opacity-25":e(o).processing}),disabled:e(o).processing},{default:m(()=>[g(" Reset Password ")]),_:1},8,["class","disabled"])])],32)]),_:1})],64))}};export{ao as default};
