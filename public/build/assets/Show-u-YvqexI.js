import{A as n}from"./AuthenticatedLayout-FAMaeXMT.js";import c from"./DeleteUserForm-Bl6MyBnk.js";import l from"./LogoutOtherBrowserSessionsForm-DJa06F7k.js";import{S as e}from"./SectionBorder-D84Qa1Pe.js";import u from"./TwoFactorAuthenticationForm-C9WeKRWe.js";import f from"./UpdatePasswordForm-FVWQZ6W3.js";import d from"./UpdateProfileInformationForm-BIku_lMk.js";import{R as _,S as p,o as r,a as s,c as i,Y as t,V as m,F as h}from"./@vue-CiBlh0uF.js";import"./@element-plus-D3uuTTHg.js";import"./@inertiajs-mmGPErgV.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./moment-C5S46NFB.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./DialogModal-BT8JBYLA.js";import"./SectionTitle-CUvA85I3.js";import"./DangerButton-CqI9Vbs4.js";import"./InputError-D_RmDawB.js";import"./SecondaryButton-bx6cUwtY.js";import"./TextInput-BZXBD8jt.js";import"./ActionMessage-BANSHUhL.js";import"./PrimaryButton-C-JDX3-N.js";import"./InputLabel-CMT4UJ6z.js";import"./FormSection-5SNgBWLN.js";const g=s("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},y={key:0},k={key:1},w={key:2},lt={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(a){return(o,A)=>(r(),_(n,{title:"Profile"},{header:p(()=>[g]),default:p(()=>[s("div",null,[s("div",$,[o.$page.props.jetstream.canUpdateProfileInformation?(r(),i("div",y,[t(d,{user:o.$page.props.auth.user},null,8,["user"]),t(e)])):m("",!0),o.$page.props.jetstream.canUpdatePassword?(r(),i("div",k,[t(f,{class:"mt-10 sm:mt-0"}),t(e)])):m("",!0),o.$page.props.jetstream.canManageTwoFactorAuthentication?(r(),i("div",w,[t(u,{"requires-confirmation":a.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(e)])):m("",!0),t(l,{sessions:a.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),o.$page.props.jetstream.hasAccountDeletionFeatures?(r(),i(h,{key:3},[t(e),t(c,{class:"mt-10 sm:mt-0"})],64)):m("",!0)])])]),_:1}))}};export{lt as default};
