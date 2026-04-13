import { NextRequest } from 'next/server';
import { cookies, headers } from 'next/headers';
import { withAuth } from '@/lib/with-auth';
 import axios from 'axios';
 import { type NextRequest, NextResponse } from 'next/server';

const appconfig={
   domainapi :'https://f7.donggiatri.com/users/demo/pluto/'
};

 async function secretGET(request: NextRequest) {
   return new Response(JSON.stringify({ secret: 'Here be dragons' }), {
    headers: { 'Content-Type': 'application/json' },
   });
 }
// export const GET = withAuth(secretGET);

async function bodyabc(request){
  let body = await request.json();
  const formData = await request.formData();
  let all = Object.fromEntries(formData); 

  for(var i in all){
    body[i] = all[i];
  }
  return body;
}
async function Proxy(request,otps){
  // const headersList = await headers();
  // const referer = headersList.get('referer');
 
  // 2. Using the standard Web APIs
  const auth = request.headers.get('auth-token');
  const pathname = request.headers.get('x-next-pathname');

  const headers ={};
  if(auth){
    headers["auth-token"]  =auth;
  }

  let data = null;
  if(otps.method=="get"){
    data = await axios.get(otps.url);
  }else{
    data = await axios.post(otps.url,otps.data);
  }
  return data;
}

function json(transformed){
   transformed  = typeof transformed=="object"? JSON.stringify(transformed):transformed;
  return  new Response(transformed, {
      headers: { 'Content-Type': 'application/json' },
  });
}

export async function GET(request: NextRequest) {
  let url  = request.nextUrl.pathname; 
  const body =   Object.fromEntries(request.nextUrl.searchParams.entries());

  let transformed ={};

  if(body){
    let url = "https://f7.donggiatri.click/users/demo/pluto/dist/";
 
    switch (body._app_) {
      case 'com.faucet.wp':
        // $url = "https://woo.posfin.click/"; 
        url = "https://f7.donggiatri.click/users/demo/wc/dist/"; 
      break; 
      case 'com.faucet.chat':
        url = "https://chat.donggiatri.click/"; 
      break; 
      case 'com.faucet.ship':
        url = "https://f7.donggiatri.click/users/demo/aship/dist/"; 
      break; 
      case 'com.faucet.pos':
        url = "https://cafe.posfin.click/";
      break; 
    }
    url = "https://f7.donggiatri.click/users/demo/pluto/dist/?m";


    transformed= {
      url :url,
      download:0
    };
 
  }else{
    url = appconfig.domainapi+pathname;
    let data = await Proxy(request,{url:url,data:body,method:"get"});

    transformed = data.data;
  }

 
  
 
  return json(transformed);
}


 
export async function POST(request: NextRequest) {
 let url  = request.nextUrl.pathname;
  
   const body = bodyabc(request);
    let transformed ={};

  if(body){
    let url = "https://f7.donggiatri.click/users/demo/pluto/dist/";
 
    switch (body._app_) {
      case 'com.faucet.wp':
        // $url = "https://woo.posfin.click/"; 
        url = "https://f7.donggiatri.click/users/demo/wc/dist/"; 
      break; 
      case 'com.faucet.chat':
        url = "https://chat.donggiatri.click/"; 
      break; 
      case 'com.faucet.ship':
        url = "https://f7.donggiatri.click/users/demo/aship/dist/"; 
      break; 
      case 'com.faucet.pos':
        url = "https://cafe.posfin.click/";
      break; 
    }
    url = "https://f7.donggiatri.click/users/demo/pluto/dist/?m";


    transformed= {
      url :url,
      download:0
    };
 
  }else{
    url = appconfig.domainapi+pathname;
    let data = await Proxy(request,{url:url,data:body,method:"get"});

    transformed = data.data;
  }

 
  
 
  return json(transformed);
 
   
}


