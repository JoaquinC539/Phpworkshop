"use strict";
import {index ,tableBuilder}from "./functions.js";
// import { template as headerTemplate } from "../templates/tableHeader.js";
// import { template as rowTemplate } from "../templates/tableRow.js";
const data=await index(20,3);
const headerFetch=await fetch('./templates/tableHeader.html');
const headerTemplate=await headerFetch.text();
const rowFetch=await fetch('./templates/tableRow.html');
const rowTemplate=await rowFetch.text();
const tableBuild=tableBuilder(data,headerTemplate,rowTemplate);

document.getElementById("pageTable").innerHTML=tableBuild;
