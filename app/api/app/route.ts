import { NextRequest } from 'next/server';
import { cookies, headers } from 'next/headers';
import { withAuth } from '@/lib/with-auth';
 import axios from 'axios';

const appconfig={
   domainapi :'https://f7.donggiatri.com/users/demo/pluto/'
};

// async function secretGET(request: NextRequest) {
//   return new Response(JSON.stringify({ secret: 'Here be dragons' }), {
//     headers: { 'Content-Type': 'application/json' },
//   });
// }
 
// export const GET = withAuth(secretGET);

export async function GET(request: NextRequest) {
  let url  = request.nextUrl.pathname;

  // const headersList = await headers();
  // const referer = headersList.get('referer');
 
  // 2. Using the standard Web APIs
  const auth = request.headers.get('auth-token');
  const pathname = request.headers.get('x-next-pathname');

  const headers ={};
  if(auth){
    headers["auth-token"]  =auth;
  }

  url = appconfig.domainapi+pathname;
  let data = await axios.get(url);

  let transformed = typeof data.data=="object"? JSON.stringify(data.data):data.data;
 
  return new Response(transformed, {
    headers: { 'Content-Type': 'application/json' },
  });
}

/*
/api/users/
 */
// export async function GET(request: Request) {

//   // For example, fetch data from your DB here
//   const users = [
//     { id: 1, name: 'Alice' },
//     { id: 2, name: 'Bob' }
//   ];
//   return new Response(JSON.stringify(users), {
//     status: 200,
//     headers: { 'Content-Type': 'application/json' }
//   });
// }

async function bodyabc(request){
  let body = await request.json();
  const formData = await request.formData();
  let all = Object.fromEntries(formData); 

  for(var i in all){
    body[i] = all[i];
  }
  return body;
}
 
export async function POST(request: NextRequest) {
 let url  = request.nextUrl.pathname;

  // const headersList = await headers();
  // const referer = headersList.get('referer');
 
  // 2. Using the standard Web APIs
  const auth = request.headers.get('auth-token');
  const pathname = request.headers.get('x-next-pathname');

  const body = bodyabc(request);

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


    return NextResponse.rewrite(new URL(url, request.url));
  }
  
  //////////////////////////
  url = appconfig.domainapi+pathname; 
  let data = await axios.post(url,{});

  let transformed = typeof data.data=="object"? JSON.stringify(data.data):data.data;
  

  return new Response(transformed, {
    headers: { 'Content-Type': 'application/json' },
  });
 
   
}


