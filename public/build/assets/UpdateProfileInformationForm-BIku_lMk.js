import{r as d,R as w,S as a,o as p,W as l,c as S,a as r,Y as o,T as f,Z as v,O as B,a5 as h,V as _,u as t,M as F}from"./@vue-CiBlh0uF.js";import{T as j,i as E,F as R}from"./@inertiajs-mmGPErgV.js";import{_ as T}from"./ActionMessage-BANSHUhL.js";import{_ as A}from"./FormSection-5SNgBWLN.js";import{_ as g}from"./InputError-D_RmDawB.js";import{_ as k}from"./InputLabel-CMT4UJ6z.js";import{_ as q}from"./PrimaryButton-C-JDX3-N.js";import{_ as V}from"./SecondaryButton-bx6cUwtY.js";import{_ as $}from"./TextInput-BZXBD8jt.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./SectionTitle-CUvA85I3.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const z={key:0,class:"col-span-6 sm:col-span-4"},D={class:"mt-2"},L=["src","alt"],M={class:"mt-2"},O={class:"col-span-6 sm:col-span-4"},Y={class:"col-span-6 sm:col-span-4"},W={key:0},Z={class:"text-sm mt-2"},G={class:"mt-2 font-medium text-sm text-green-600"},$e={__name:"UpdateProfileInformationForm",props:{user:Object},setup(m){const y=m,e=j({_method:"PUT",name:y.user.name,email:y.user.email,photo:null}),b=d(null),u=d(null),i=d(null),x=()=>{i.value&&(e.photo=i.value.files[0]),e.post(route("user-profile-information.update"),{errorBag:"updateProfileInformation",preserveScroll:!0,onSuccess:()=>P()})},C=()=>{b.value=!0},I=()=>{i.value.click()},N=()=>{const s=i.value.files[0];if(!s)return;const n=new FileReader;n.onload=c=>{u.value=c.target.result},n.readAsDataURL(s)},U=()=>{R.delete(route("current-user-photo.destroy"),{preserveScroll:!0,onSuccess:()=>{u.value=null,P()}})},P=()=>{var s;(s=i.value)!=null&&s.value&&(i.value.value=null)};return(s,n)=>(p(),w(A,{onSubmitted:x},{title:a(()=>[l(" Profile Information ")]),description:a(()=>[l(" Update your account's profile information and email address. ")]),form:a(()=>[s.$page.props.jetstream.managesProfilePhotos?(p(),S("div",z,[r("input",{id:"photo",ref_key:"photoInput",ref:i,type:"file",class:"hidden",onChange:N},null,544),o(k,{for:"photo",value:"Photo"}),f(r("div",D,[r("img",{src:m.user.profile_photo_url,alt:m.user.name,class:"rounded-full h-20 w-20 object-cover"},null,8,L)],512),[[v,!u.value]]),f(r("div",M,[r("span",{class:"block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center",style:B("background-image: url('"+u.value+"');")},null,4)],512),[[v,u.value]]),o(V,{class:"mt-2 me-2",type:"button",onClick:h(I,["prevent"])},{default:a(()=>[l(" Select A New Photo ")]),_:1}),m.user.profile_photo_path?(p(),w(V,{key:0,type:"button",class:"mt-2",onClick:h(U,["prevent"])},{default:a(()=>[l(" Remove Photo ")]),_:1})):_("",!0),o(g,{message:t(e).errors.photo,class:"mt-2"},null,8,["message"])])):_("",!0),r("div",O,[o(k,{for:"name",value:"Name"}),o($,{id:"name",modelValue:t(e).name,"onUpdate:modelValue":n[0]||(n[0]=c=>t(e).name=c),type:"text",class:"mt-1 block w-full",required:"",autocomplete:"name"},null,8,["modelValue"]),o(g,{message:t(e).errors.name,class:"mt-2"},null,8,["message"])]),r("div",Y,[o(k,{for:"email",value:"Email"}),o($,{id:"email",modelValue:t(e).email,"onUpdate:modelValue":n[1]||(n[1]=c=>t(e).email=c),type:"email",class:"mt-1 block w-full",required:"",autocomplete:"username"},null,8,["modelValue"]),o(g,{message:t(e).errors.email,class:"mt-2"},null,8,["message"]),s.$page.props.jetstream.hasEmailVerification&&m.user.email_verified_at===null?(p(),S("div",W,[r("p",Z,[l(" Your email address is unverified. "),o(t(E),{href:s.route("verification.send"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500",onClick:h(C,["prevent"])},{default:a(()=>[l(" Click here to re-send the verification email. ")]),_:1},8,["href"])]),f(r("div",G," A new verification link has been sent to your email address. ",512),[[v,b.value]])])):_("",!0)])]),actions:a(()=>[o(T,{on:t(e).recentlySuccessful,class:"me-3"},{default:a(()=>[l(" Saved. ")]),_:1},8,["on"]),o(q,{class:F({"opacity-25":t(e).processing}),disabled:t(e).processing},{default:a(()=>[l(" Save ")]),_:1},8,["class","disabled"])]),_:1}))}};export{$e as default};