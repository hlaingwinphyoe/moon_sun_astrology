import{A as N}from"./AuthenticatedLayout-BirlbE4Q.js";import{F as _}from"./@inertiajs-BgBGItYw.js";import{d as P}from"./lodash.debounce-BuEyZVTI.js";import F from"./Dialog-Be8S9aZd.js";import{B as R,Q as M,R as O,S as j,P as U}from"./@element-plus-Dpx_4zAy.js";import{_ as H}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{E as v,a as g}from"./element-plus-B6wquGkZ.js";import{e as I,w as J,a1 as W,ak as o,ar as Q,c as D,Y as e,S as a,F as X,o as x,a as i,T as Y,X as C,W as q}from"./@vue-B1CVMTK9.js";import"./moment-C5S46NFB.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";import"./InputError-Cdm0MI_H.js";import"./lodash-es-CiJSjksT.js";import"./@vueuse-CNLP_BxJ.js";import"./@popperjs-D9SI2xQl.js";import"./@ctrl-r5W6hzzQ.js";import"./dayjs-DnZiAhhr.js";import"./async-validator-DKvM95Vc.js";import"./memoize-one-BdPwpGay.js";import"./normalize-wheel-es-B6fDCfyv.js";import"./@floating-ui-DF51-gJp.js";const G={props:["packages","astrologers","currencies"],components:{AuthenticatedLayout:N,Dialog:F,Plus:R,Edit:M,Refresh:O,Filter:j,Delete:U},setup(){const t=I({showDialog:!1,isLoading:!1,dialog:{dialogTitle:"",dialogData:{}},pageList:[10,20,60,80,100],param:{page:1,page_size:10,search:""}}),f=n=>{t.param.page_size=n,u()},d=n=>{t.param.page=n,u()},r=()=>{t.dialog.dialogTitle="Create",t.dialog.dialogData={},t.showDialog=!0},w=n=>{t.dialog.dialogTitle="Edit",t.dialog.dialogData=JSON.parse(JSON.stringify(n)),t.showDialog=!0},y=n=>{v.confirm("Are you sure want to change status of this package?","Confirmation",{confirmButtonText:"Confirm",cancelButtonText:"Cancel",type:"warning",draggable:!0,closeOnClickModal:!1}).then(()=>{_.patch(route("admin.packages.change-status",n.id),{},{preserveState:!0,onSuccess:s=>{g.success(s.props.flash.success)},onError:s=>{g.error(s.props.flash.error)}})}).catch(()=>{_.reload(),g({type:"info",message:"Cancel"})})},b=n=>{v.confirm("Are you sure you want to delete?","Warning",{confirmButtonText:"Confirm",cancelButtonText:"Cancel",type:"warning",draggable:!0,closeOnClickModal:!1}).then(()=>{_.delete(route("admin.packages.destroy",n),{onSuccess:s=>{g.success(s.props.flash.success)},onError:s=>{g.error(s.props.flash.error)}})}).catch(()=>{g({type:"info",message:"Cancel"})})};J(()=>t.param.search,P(()=>{u()},500));const u=()=>{t.isLoading=!0,_.get("/admin/packages",t.param,{preserveScroll:!0,preserveState:!0,replace:!0,onFinish:()=>{t.isLoading=!1}})},p=()=>{t.showDialog=!1},m=()=>{_.get(route("admin.packages.index"))};return{...W(t),addNew:r,handleEdit:w,handleDelete:b,onSizeChange:f,onCurrentChange:d,closeDialog:p,reset:m,changeStatus:y}}},K={class:"p-4 container mx-auto overflow-x-auto"},Z=i("h4",{class:"text-lg font-bold mb-3 ml-1"},"Packages",-1),$={class:"bg-white p-4 rounded shadow-sm border border-gray-200"},ee={class:"flex items-center justify-between gap-4 xl:gap-0 mt-2 mb-5"},te={class:"flex items-center gap-3"},ae=i("span",null,"New",-1),oe={"element-loading-text":"Loading...","element-loading-background":"rgba(229, 231, 235, 0.7)"},le={class:"font-semibold"},ne={class:"my-5 flex items-center justify-center"};function re(t,f,d,r,w,y){const b=o("Head"),u=o("Plus"),p=o("el-icon"),m=o("el-button"),n=o("el-input"),s=o("Refresh"),c=o("el-table-column"),S=o("el-switch"),E=o("Edit"),k=o("el-tooltip"),z=o("Delete"),A=o("el-table"),L=o("el-pagination"),T=o("Dialog"),V=o("AuthenticatedLayout"),B=Q("loading");return x(),D(X,null,[e(b,{title:"Packages"}),e(V,null,{default:a(()=>[i("div",K,[Z,i("div",$,[i("div",ee,[i("div",te,[e(m,{type:"primary",onClick:r.addNew},{default:a(()=>[e(p,null,{default:a(()=>[e(u)]),_:1}),ae]),_:1},8,["onClick"])]),i("div",null,[e(n,{modelValue:t.param.search,"onUpdate:modelValue":f[0]||(f[0]=l=>t.param.search=l),style:{width:"200px"},placeholder:"Search Packages"},null,8,["modelValue"]),e(m,{type:"danger",onClick:r.reset,class:"ml-3"},{default:a(()=>[e(p,null,{default:a(()=>[e(s)]),_:1})]),_:1},8,["onClick"])])]),Y((x(),D("div",oe,[e(A,{data:d.packages.data,"table-layout":"fixed","default-sort":{prop:"id",order:"descending"}},{default:a(()=>[e(c,{prop:"id",label:"ID",sortable:""}),e(c,{label:"Name",sortable:""},{default:a(l=>[i("h5",le,C(l.row.name),1)]),_:1}),e(c,{label:"Price",sortable:"",align:"center"},{default:a(l=>[q(C(l.row.price)+" "+C(l.row.currency),1)]),_:1}),e(c,{prop:"astrologer",label:"Astrologer",sortable:"",align:"center"}),e(c,{prop:"created_at",label:"Created At",sortable:"",align:"center"}),e(c,{label:"Available",align:"center"},{default:a(l=>[e(S,{modelValue:l.row.disabled,"onUpdate:modelValue":h=>l.row.disabled=h,"active-value":0,"inactive-value":1,onChange:h=>r.changeStatus(l.row)},null,8,["modelValue","onUpdate:modelValue","onChange"])]),_:1}),e(c,{label:"Actions"},{default:a(l=>[e(k,{class:"box-item",content:"Edit",placement:"top"},{default:a(()=>[e(m,{type:"warning",circle:"",style:{"margin-bottom":"5px"},onClick:h=>r.handleEdit(l.row)},{default:a(()=>[e(p,null,{default:a(()=>[e(E)]),_:1})]),_:2},1032,["onClick"])]),_:2},1024),e(k,{class:"box-item",content:"Delete",placement:"top"},{default:a(()=>[e(m,{type:"danger",circle:"",style:{"margin-bottom":"5px"},onClick:h=>r.handleDelete(l.row.id)},{default:a(()=>[e(p,null,{default:a(()=>[e(z)]),_:1})]),_:2},1032,["onClick"])]),_:2},1024)]),_:1})]),_:1},8,["data"]),i("div",ne,[e(L,{onSizeChange:r.onSizeChange,onCurrentChange:r.onCurrentChange,"page-size":t.param.page_size,background:!0,"page-sizes":t.pageList,"current-page":t.param.page,layout:"total,sizes,prev,pager,next,jumper",total:d.packages.total},null,8,["onSizeChange","onCurrentChange","page-size","page-sizes","current-page","total"])])])),[[B,t.isLoading]])])]),e(T,{show:t.showDialog,onClosed:r.closeDialog,title:t.dialog.dialogTitle,data:t.dialog.dialogData,astrologers:d.astrologers,currencies:d.currencies},null,8,["show","onClosed","title","data","astrologers","currencies"])]),_:1})],64)}const Qe=H(G,[["render",re]]);export{Qe as default};
