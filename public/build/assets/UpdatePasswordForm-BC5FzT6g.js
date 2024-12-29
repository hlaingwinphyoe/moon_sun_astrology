import{_ as n}from"./InputError-Cdm0MI_H.js";import{T as f}from"./@inertiajs-BgBGItYw.js";import{a as g}from"./element-plus-CWFOddsC.js";import{r as b,ak as l,c as V,Y as s,S as p,u as r,a as m,o as y,M as x,W as P}from"./@vue-B1CVMTK9.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./lodash-es-CiJSjksT.js";import"./@vueuse-CNLP_BxJ.js";import"./@element-plus-BeIX5OZl.js";import"./@popperjs-D9SI2xQl.js";import"./@ctrl-r5W6hzzQ.js";import"./dayjs-DnZiAhhr.js";import"./async-validator-DKvM95Vc.js";import"./memoize-one-BdPwpGay.js";import"./normalize-wheel-es-B6fDCfyv.js";import"./@floating-ui-DF51-gJp.js";const C=m("header",{class:"mb-4"},[m("h2",{class:"text-lg font-medium text-gray-900"},"Update Password"),m("p",{class:"mt-1 text-sm text-gray-600"}," Ensure your account is using a long, random password to stay secure. ")],-1),h={class:"flex items-center gap-4"},pe={__name:"UpdatePasswordForm",setup(v){const u=b(),e=f({current_password:"",password:"",password_confirmation:""}),c=i=>{i.validate(o=>{o&&e.patch(route("password.update"),{preserveScroll:!0,onSuccess:a=>{e.reset(),i.resetFields(),g.success(a.props.flash.success)}})})};return(i,o)=>{const a=l("el-input"),d=l("el-form-item"),w=l("el-button"),_=l("el-form");return y(),V("section",null,[C,s(_,{"label-width":"120px",ref_key:"formRef",ref:u,model:r(e),"label-position":"top"},{default:p(()=>[s(d,{label:"Current Password",prop:"current_password",size:"large",rules:[{required:!0,message:"Current Password is required",trigger:"blur"}]},{default:p(()=>[s(a,{type:"password","show-password":"",modelValue:r(e).current_password,"onUpdate:modelValue":o[0]||(o[0]=t=>r(e).current_password=t),placeholder:""},null,8,["modelValue"]),s(n,{message:r(e).errors.current_password,class:"mt-2"},null,8,["message"])]),_:1}),s(d,{label:"Password",prop:"password",size:"large",rules:[{required:!0,message:"Password is required",trigger:"blur"}]},{default:p(()=>[s(a,{type:"password","show-password":"",modelValue:r(e).password,"onUpdate:modelValue":o[1]||(o[1]=t=>r(e).password=t),placeholder:""},null,8,["modelValue"]),s(n,{message:r(e).errors.password,class:"mt-2"},null,8,["message"])]),_:1}),s(d,{label:"Password Confirmation",prop:"password_confirmation",size:"large",rules:[{required:!0,message:"Password Confirmation is required",trigger:"blur"}]},{default:p(()=>[s(a,{type:"password","show-password":"",modelValue:r(e).password_confirmation,"onUpdate:modelValue":o[2]||(o[2]=t=>r(e).password_confirmation=t),placeholder:""},null,8,["modelValue"]),s(n,{message:r(e).errors.password_confirmation,class:"mt-2"},null,8,["message"])]),_:1}),m("div",h,[s(w,{type:"primary",onClick:o[3]||(o[3]=t=>c(u.value)),class:x({"opacity-25":r(e).processing}),disabled:r(e).processing},{default:p(()=>[P(" Save ")]),_:1},8,["class","disabled"])])]),_:1},8,["model"])])}}};export{pe as default};