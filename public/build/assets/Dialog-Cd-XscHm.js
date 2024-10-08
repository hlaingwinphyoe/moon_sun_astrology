import{e as S,r as V,a1 as k,ak as n,R as C,S as m,o as y,a as p,Y as a,W as D,M as h,T as I,Z as R}from"./@vue-CiBlh0uF.js";import{_ as U}from"./InputError-D_RmDawB.js";import{B as E,P as B}from"./@element-plus-D3uuTTHg.js";import{F as _}from"./@inertiajs-mmGPErgV.js";import{_ as P}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{a as b}from"./element-plus-Bft-HdNs.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./lodash-es-CiJSjksT.js";import"./@vueuse-D_65hJm2.js";import"./@popperjs-D9SI2xQl.js";import"./@ctrl-r5W6hzzQ.js";import"./dayjs-DnZiAhhr.js";import"./async-validator-DKvM95Vc.js";import"./memoize-one-BdPwpGay.js";import"./normalize-wheel-es-B6fDCfyv.js";import"./@floating-ui-DF51-gJp.js";const T={props:["show","title","data"],components:{InputError:U,Plus:E,Delete:B},emits:["closed"],setup(r,o){const e=S({dialogTitle:"",isLoading:!1,virtualForm:new FormData,imgSrc:"",form:{name:"",price:""}}),i=V(),F=t=>{t.validate(g=>{g&&(e.virtualForm.append("name",e.form.name),e.virtualForm.append("price",e.form.price),e.dialogTitle==="Create"?_.post(route("admin.items.store"),e.virtualForm,{onSuccess:s=>{e.isLoading=!1,b.success(s.props.flash.success),t.resetFields(),d(t)},onError:()=>{e.isLoading=!1,t.resetFields()}}):(e.virtualForm.append("_method","patch"),_.post(route("admin.items.update",r.data.id),e.virtualForm,{onSuccess:s=>{e.isLoading=!1,b.success(s.props.flash.success),t.resetFields(),d(t)},onError:s=>{e.isLoading=!1,t.resetFields(),b.error(s.error)}})))})},w=()=>{var t=document.getElementById("upload");t.click()},f=t=>{var g=t.target,s=g.files[0];e.imgSrc=URL.createObjectURL(s),e.virtualForm.append("image",s);var c=document.getElementById("preview_img");c.src=URL.createObjectURL(s),c.onload=function(){URL.revokeObjectURL(c.src)}},d=t=>{t.resetFields(),o.emit("closed")},u=t=>{_.delete(route("admin.items.destroy-media",t.id),{onSuccess:()=>{e.imgSrc=""}})},v=()=>{e.dialogTitle=r.title,e.form.name=r.data.name??"",e.form.price=r.data.price??"",e.imgSrc=r.data.image??""};return{...k(e),openDialog:v,formRef:i,closeDialog:d,submitDialog:F,selectImage:w,loadFile:f,handleRemove:u}}},j={class:"relative group"},N=["src"],O={class:"dialog-footer"};function q(r,o,e,i,F,w){const f=n("el-input"),d=n("InputError"),u=n("el-form-item"),v=n("Delete"),t=n("el-icon"),g=n("Plus"),s=n("el-form"),c=n("el-button"),L=n("el-dialog");return y(),C(L,{modelValue:e.show,"onUpdate:modelValue":o[7]||(o[7]=l=>e.show=l),onClose:o[8]||(o[8]=l=>i.closeDialog(i.formRef)),onOpen:i.openDialog,draggable:"",title:r.dialogTitle,"close-on-click-modal":!1,width:"550"},{footer:m(()=>[p("div",O,[a(c,{onClick:o[5]||(o[5]=l=>i.closeDialog(i.formRef))},{default:m(()=>[D("Cancel")]),_:1}),a(c,{type:"primary",onClick:o[6]||(o[6]=l=>i.submitDialog(i.formRef)),class:h({"opacity-25":r.isLoading}),disabled:r.isLoading},{default:m(()=>[D(" Save ")]),_:1},8,["class","disabled"])])]),default:m(()=>[a(s,{"label-width":"120px",ref:"formRef",model:r.form},{default:m(()=>[a(u,{label:"Name",prop:"name",rules:[{required:!0,message:"Name is required",trigger:"blur"}]},{default:m(()=>[a(f,{modelValue:r.form.name,"onUpdate:modelValue":o[0]||(o[0]=l=>r.form.name=l)},null,8,["modelValue"]),a(d,{class:"mt-2",message:r.$page.props.errors.name},null,8,["message"])]),_:1}),a(u,{label:"Price",prop:"price",rules:[{required:!0,message:"Price is required",trigger:"blur"}]},{default:m(()=>[a(f,{type:"number",min:"0",modelValue:r.form.price,"onUpdate:modelValue":o[1]||(o[1]=l=>r.form.price=l)},null,8,["modelValue"]),a(d,{class:"mt-2",message:r.$page.props.errors.price},null,8,["message"])]),_:1}),a(u,{label:"Image"},{default:m(()=>[p("div",j,[I(p("img",{id:"preview_img",class:"upload-card object-contain mr-2.5",src:r.imgSrc},null,8,N),[[R,r.imgSrc!=""]]),p("span",{class:"absolute-center hidden group-hover:flex group-hover:bg-black group-hover:bg-opacity-50 w-[148px] h-[148px] text-white items-center justify-center rounded-md",onClick:o[2]||(o[2]=l=>i.handleRemove(e.data))},[a(t,{size:"large",class:"cursor-pointer"},{default:m(()=>[a(v)]),_:1})])]),p("div",{class:"upload-card",onClick:o[4]||(o[4]=(...l)=>i.selectImage&&i.selectImage(...l))},[p("h4",null,[a(t,{size:"large"},{default:m(()=>[a(g)]),_:1})]),p("input",{type:"file",class:"hidden",name:"image",id:"upload",onChange:o[3]||(o[3]=(...l)=>i.loadFile&&i.loadFile(...l)),accept:"image/*"},null,32)]),a(d,{class:"mt-2",message:r.$page.props.errors.image},null,8,["message"])]),_:1})]),_:1},8,["model"])]),_:1},8,["modelValue","onOpen","title"])}const De=P(T,[["render",q]]);export{De as default};
