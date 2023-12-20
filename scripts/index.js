"use strict";
import {index ,tableBuilder,getTemplate}from "./functions.js";
const data=await index(20,3);
const headerTemplate=await getTemplate('./templates/tableHeader.html');
const rowTemplate=await getTemplate('./templates/tableRow.html');

document.getElementById("pageTable").innerHTML=tableBuilder(data,headerTemplate,rowTemplate);;
