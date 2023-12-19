"use strict";
export const index=async (max,offset)=>{
    let response=(await getData(20,3));
    let data=await response.json()
    return data;
}
export const getData=(max,offset)=>{
    const params=new URLSearchParams({max:max,offset:offset})
    return fetch("./dbApi.php?"+params);
}
export const tableBuilder=(data,headerTemplate,rowTemplate)=>{
    const colTemplate=Handlebars.compile(headerTemplate);
    const dataTemplate=Handlebars.compile(rowTemplate);
    const headers={cols:Object.keys(data[0])};
    let table="";
    table+=colTemplate(headers);
    const rows={data:data}
    table+=dataTemplate(rows);
    return table;
}