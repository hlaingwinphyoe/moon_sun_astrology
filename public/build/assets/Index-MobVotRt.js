import{A as L}from"./AuthenticatedLayout-TSwoo5LD.js";import{F as _}from"./@inertiajs-BgBGItYw.js";import{d as B}from"./lodash.debounce-BuEyZVTI.js";import{B as T,Q as F,R as N,S as A,P as R,v as j}from"./@element-plus-BeIX5OZl.js";import{_ as P}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{e as E,w as H,a1 as I,ak as o,ar as K,c as b,Y as e,S as a,F as Q,o as w,a as r,T as U,W as k,X as v}from"./@vue-B1CVMTK9.js";import"./moment-C5S46NFB.js";import"./axios-CCb-kr4I.js";import"./deepmerge-CtOfIP5S.js";import"./call-bind-aBC2DkHY.js";import"./get-intrinsic-BKEvijrG.js";import"./es-errors-DzOT6E3C.js";import"./has-symbols-eVqrYdw7.js";import"./has-proto-JnoBQRdH.js";import"./function-bind-BbkWVFrm.js";import"./hasown-DYqjtFKE.js";import"./set-function-length-B5OANX0j.js";import"./define-data-property-DO9o5wXF.js";import"./es-define-property-tzmkNPou.js";import"./gopd-CEkvUycD.js";import"./has-property-descriptors-DphFXkuo.js";import"./qs-Bgg5YRNC.js";import"./side-channel-CbjMffun.js";import"./object-inspect-8Tg_cmh0.js";import"./nprogress-uqLJ5xmn.js";import"./lodash.clonedeep-Bxvn-V0B.js";import"./lodash.isequal-BYpQg7Um.js";const W={props:["bookings"],components:{AuthenticatedLayout:L,Plus:T,Edit:F,Refresh:N,Filter:A,Delete:R,View:j},setup(){const t=E({showDialog:!1,isLoading:!1,dialog:{dialogTitle:"",dialogData:{}},pageList:[10,20,60,80,100],param:{page:1,page_size:10,search:""}}),p=n=>{t.param.page_size=n,c()},d=n=>{t.param.page=n,c()},s=n=>{_.visit(route("admin.bookings.show",n))},g=()=>{t.dialog.dialogTitle="Create",t.dialog.dialogData={},t.showDialog=!0};H(()=>t.param.search,B(()=>{c()},500));const c=()=>{t.isLoading=!0,_.get("/admin/bookings",t.param,{preserveScroll:!0,preserveState:!0,replace:!0,onFinish:()=>{t.isLoading=!1}})},m=()=>{t.showDialog=!1},u=()=>{_.get(route("admin.bookings.index"))};return{...I(t),addNew:g,handleView:s,onSizeChange:p,onCurrentChange:d,closeDialog:m,reset:u}}},X={class:"p-4 container mx-auto overflow-x-auto"},Y=r("h4",{class:"text-lg font-bold mb-3 ml-1"},"Today Bookings",-1),q={class:"bg-white p-4 rounded shadow-sm border border-gray-200"},G={class:"flex items-center justify-end gap-4 xl:gap-0 mt-2 mb-5"},J={"element-loading-text":"Loading...","element-loading-background":"rgba(229, 231, 235, 0.7)"},M={class:"my-5 flex items-center justify-center"};function O(t,p,d,s,g,c){const m=o("Head"),u=o("el-input"),n=o("Refresh"),f=o("el-icon"),h=o("el-button"),i=o("el-table-column"),C=o("el-tag"),y=o("View"),D=o("el-tooltip"),x=o("el-table"),z=o("el-pagination"),S=o("AuthenticatedLayout"),V=K("loading");return w(),b(Q,null,[e(m,{title:"Today Bookings"}),e(S,null,{default:a(()=>[r("div",X,[Y,r("div",q,[r("div",G,[r("div",null,[e(u,{modelValue:t.param.search,"onUpdate:modelValue":p[0]||(p[0]=l=>t.param.search=l),style:{width:"200px"},placeholder:"Search Bookings"},null,8,["modelValue"]),e(h,{type:"danger",onClick:s.reset,class:"ml-3"},{default:a(()=>[e(f,null,{default:a(()=>[e(n)]),_:1})]),_:1},8,["onClick"])])]),U((w(),b("div",J,[e(x,{data:d.bookings.data,"table-layout":"fixed","default-sort":{prop:"appointment_no",order:"descending"}},{default:a(()=>[e(i,{prop:"appointment_no",label:"Book No.",sortable:""}),e(i,{prop:"customer_name",label:"Cus: Name",sortable:""}),e(i,{prop:"desc",label:"Desc"}),e(i,{label:"Total Price"},{default:a(l=>[k(v(l.row.total_price)+" Ks ",1)]),_:1}),e(i,{label:"Status"},{default:a(l=>[e(C,{type:"primary"},{default:a(()=>[k(v(l.row.status),1)]),_:2},1024)]),_:1}),e(i,{prop:"created_at",label:"Booked Date",sortable:""}),e(i,{label:"Actions"},{default:a(l=>[e(D,{class:"box-item",content:"Detail",placement:"top"},{default:a(()=>[e(h,{circle:"",style:{"margin-bottom":"5px"},onClick:Z=>s.handleView(l.row.id)},{default:a(()=>[e(f,null,{default:a(()=>[e(y)]),_:1})]),_:2},1032,["onClick"])]),_:2},1024)]),_:1})]),_:1},8,["data"]),r("div",M,[e(z,{onSizeChange:s.onSizeChange,onCurrentChange:s.onCurrentChange,"page-size":t.param.page_size,background:!0,"page-sizes":t.pageList,"current-page":t.param.page,layout:"total,sizes,prev,pager,next,jumper",total:d.bookings.total},null,8,["onSizeChange","onCurrentChange","page-size","page-sizes","current-page","total"])])])),[[V,t.isLoading]])])])]),_:1})],64)}const ze=P(W,[["render",O]]);export{ze as default};