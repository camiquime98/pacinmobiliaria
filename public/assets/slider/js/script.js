// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 9.0
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInBackQ:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*h*(4*f*h-8*h+8*f-3)},easeOutBackQ:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(4*h*f*h-12*h*h+16*h*f-13*h+6*f)},easeInBackQ2:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*h*(1.5*f*h-2.5*h+5*f-3)},easeOutBackQ2:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(1.5*h*f*h-5*h*h+10*h*f-12*h+6.5*f)}});function ws_louvers(f,q,g){var h=jQuery,m=h(this),a=f.cols||10,F=2.5,c=2,t=f.perspective||2000,s=g.find(".ws_list"),E=[],b=5,v={},n=h("<div>").addClass("ws_effect ws_louvers").appendTo(g),p=f.support.transform&&f.support.transition&&f.support.perspective,o=/Safari/.test(navigator.userAgent)&&!/Chrome/.test(navigator.userAgent)&&!/WOW Slider/g.test(navigator.userAgent);var w=[];n.css({position:"absolute",top:0,left:0,width:g.width(),height:g.height(),transform:"translate3d(0,0,0)",transformOrigin:(f.width/2)+"px "+(f.height/2)+"px 0",perspective:t+2000}).hide();for(var l=0;l<a;l++){var z=l%a,y=Math.floor(l/a);var C=h("<div>").css({position:"absolute",left:100*z/a+"%",top:0,outline:"1px solid transparent",transformStyle:o?"flat":"preserve-3d",overflow:p?"visible":"hidden"}).appendTo(n),x=h("<div>").css({transform:"scale(1) rotateX(0) rotateY(0) translate3d(0,0,0)",outline:"1px solid transparent",transformStyle:"preserve-3d"}).appendTo(C),u=h("<div>").addClass("ws_front_image").appendTo(x),B=p?h("<div>").addClass("ws_back_image").appendTo(x):0;u.css({position:"absolute",width:"100%",height:"100%",overflow:"hidden",backfaceVisibility:"hidden",transform:"translate3d(0,0,0)"}).append(h("<img>").css({left:-z*100+"%",top:-y*100+"%",position:"absolute",outline:"1px solid transparent"}));if(p){B.css({position:"absolute",width:"100%",height:"100%",overflow:"hidden",backfaceVisibility:"hidden",transform:"rotateY(180deg) translate3d(0,0,"+b+"px)"}).append(h("<img>").css({left:-z*100+"%",top:-y*100+"%",position:"absolute",outline:"1px solid transparent"}))}var r={position:"absolute",outline:"1px solid transparent"};E[l]={part:x,front:u,back:B,wrapper:C,leftEdge:p?h("<div>").addClass("ws_left_edge").css(r).appendTo(x):0,rightEdge:p?h("<div>").addClass("ws_right_edge").css(r).appendTo(x):0,topEdge:p?h("<div>").addClass("ws_top_edge").css(r).appendTo(x):0,bottomEdge:p?h("<div>").addClass("ws_bottom_edge").css(r).appendTo(x):0}}function A(L){var H={},J=q.get(L),M=f.width/a,N=f.height;for(var I=0;I<a;I++){var L=I%a,K=Math.floor(I/a);H[I]=D(J,{x:L*M,y:K*N,w:M,h:N})}return H}function G(H,K,j,I,J){for(var i in K){if(typeof E[i]!=="function"){K[i].topEdge.css({width:I,height:H,background:j[i],transform:"rotateX(90deg) translate3d(0,-"+H/2+"px,"+H/2+"px)"});K[i].bottomEdge.css({width:I,height:H,background:j[i],transform:"rotateX(90deg) translate3d(0,-"+H/2+"px,"+(-J+H/2)+"px)"});K[i].leftEdge.css({width:H,height:J,background:j[i],transform:"rotateY(90deg) translate3d("+H/2+"px,0,-"+H/2+"px)"});K[i].rightEdge.css({width:H,height:J,background:j[i],transform:"rotateY(90deg) translate3d("+H/2+"px,0,"+(I-H/2)+"px)"})}}}function e(H,I){var i=0;for(var j in H){if(typeof H[j]!=="function"){(function(J,K){wowAnimate(function(M){var S,Q,R,P="",L={};if(M<=0.5){S=h.easing.easeInBack(1,M*2,0,1,1,1).toFixed(3);Q=h.easing.easeInBackQ(1,M*2,0,1,1,1).toFixed(3);R=h.easing.easeInBackQ2(1,M*2,0,1,1,1).toFixed(3);K[J].back.css("backfaceVisibility","hidden")}else{S=h.easing.easeOutBack(1,(M-0.5)*2,0,1,1,1).toFixed(3);Q=h.easing.easeOutBackQ(1,(M-0.5)*2,0,1,1,1).toFixed(3);R=h.easing.easeOutBackQ2(1,(M-0.5)*2,0,1,1,1).toFixed(3);K[J].back.css("backfaceVisibility","visible")}for(var N in K[J].animate[M<=0.5?"half":"end"]){var T=K[J].animate[M<=0.5?"begin":"half"][N]||0,O=K[J].animate[M<=0.5?"half":"end"][N]||0;if(typeof O!=="object"){if(N==="scale"||N==="rotateX"||N==="rotateY"){O=T+(O-T)*Q}else{if(N==="left"||N==="top"){O=T+(O-T)*R}else{O=T+(O-T)*S}}}if(N==="rotateX"||N==="rotateY"||N==="rotateZ"){P+=N+"("+O+"deg) "}else{if(N==="scale"){P+=N+"("+O+") "}else{if(N==="translate3d"){P+=N+"("+(T[0]+(O[0]-T[0])*S).toFixed(3)+"px,"+(T[1]+(O[1]-T[1])*S).toFixed(3)+"px,"+(T[2]+(O[2]-T[2])*S).toFixed(3)+"px) "}else{L[N]=O}}}}K[J].wrapper.css({transform:"translate3d("+(L.left?L.left:0).toFixed(3)+"px,"+(L.top?L.top:0).toFixed(3)+"px,0)"});delete L.left;delete L.top;if(P){L.transform=P}K[J].part.css(L)},0,1,K[J].animate.duration,K[J].animate.delay,function(){i++;if(i==K.length&&I){I()}})}(j,H))}}}function k(Y,K,L,N){var V=g.width(),U=g.height(),T=V/a,S=U,J=(f.duration*0.4)>1000?1000:(f.duration*0.4),I=f.duration*0.6,O=[0,0];G(b,Y,v[K],T,S);n.css({transformOrigin:(V/2)+"px "+(U/2)+"px 0",width:V,height:U});for(var Q in Y){if(typeof Y[Q]!=="function"){var H=w[Q].delay*J;if(O[1]<=H){O[0]=Q;O[1]=H}Y[Q].part[0].ws_delay=[H,0]}}Y[O[0]].part[0].ws_delay[1]=1;for(var Q in Y){if(typeof Y[Q]!=="function"){var P=Y[Q],X=Q%a,W=Math.floor(Q/a),R=V*X/a,M=U*W;P.animate={delay:P.part[0].ws_delay[0],duration:I,begin:{left:0,top:0,width:T,height:S,scale:1,rotateX:0,rotateY:0,translate3d:[0,0,o?b:0]},half:{left:w[Q].halfLeft*T,top:w[Q].halfTop*S,scale:w[Q].halfScale,rotateX:w[Q].rotateX/2,rotateY:w[Q].rotateY/2,translate3d:[0,0,(o?1:0.5)*b]},end:{left:0,top:0,scale:1,rotateX:w[Q].rotateX,rotateY:w[Q].rotateY,translate3d:[0,0,b]}};P.front.find("img").css(L);P.back.css("backfaceVisibility","hidden").find("img").css(L);P.part.css({width:P.animate.begin.width,height:P.animate.begin.height,left:P.animate.begin.left,top:P.animate.begin.top})}}e(Y,N)}var d;this.go=function(U,K){if(d){return K}n.show();var I=h(q.get(K));I={width:I.width(),height:I.height(),marginTop:parseFloat(I.css("marginTop")),marginLeft:parseFloat(I.css("marginLeft"))};w=(function(){var aa=[0,1];var ab=[1.2,0.8];var Z=[0.2,0,-0.2];var Y=[180,-180];aa=aa[Math.floor(Math.random()*(aa.length))];ab=ab[Math.floor(Math.random()*(ab.length))];Z=Z[Math.floor(Math.random()*(Z.length))];Y=Y[Math.floor(Math.random()*(Y.length))];var j=a;var i=[];for(var X=(aa?0:j);aa?(X<=j):(X>=0);aa?(X++):(X--)){i.push({zIndex:X-(aa?j:0),rotateY:Y,delay:X/j,halfScale:ab,halfLeft:Z})}return i}());if(p){E[0].front.find("img").on("load",function(){s.hide()});for(var L in E){if(typeof E[L]!=="function"){E[L].front.find("img").attr("src",q.get(K).src);E[L].back.find("img").attr("src",q.get(U).src)}}if(!v[K]){v[K]=A(K)}d=new k(E,K,I,function(){s.show();m.trigger("effectEnd");n.hide();for(var i in E){if(typeof E[i]!=="function"){E[i].part.css({transition:"",transform:"rotateX(0) rotateY(0) translate3d(0,0,0)"})}}d=0})}else{d=true;function V(j,i){return Math.random()*(i-j+1)+j}var Q=g.width(),T=g.height(),P=Q/a,S=T,J=Q-P*(a-1),R=T;n.css({width:Q,height:T});var H=0;for(var L in E){var O=L%a,N=Math.floor(L/a);E[L].front.find("img").attr("src",q.get(U).src).css(I);var W=f.duration*(1-Math.abs((c*F-O*N)/(2*a)));var M=V(-1,1)>0?1:-1;E[L].wrapper.css({width:P,height:S});E[L].part.css({position:"absolute",top:0,left:M*P,opacity:0,width:P,height:S}).animate({left:0,opacity:1},W,function(){H++;if(H==a){s.stop(1,1);d=false;m.trigger("effectEnd")}})}}};function D(Q,H){H=H||{};var S=1,K=H.exclude||[],P;var M=document.createElement("canvas"),J=M.getContext("2d"),I=M.width=Q.naturalWidth,W=M.height=Q.naturalHeight;J.drawImage(Q,0,0,Q.naturalWidth,Q.naturalHeight);try{P=J.getImageData(H.x?H.x:0,H.y?H.y:0,H.w?H.w:Q.width,H.h?H.h:Q.height)["data"]}catch(R){console.log("error:unable to access image data: "+R);return"#ccc"}var L=(H.w?H.w:Q.width*H.h?H.h:Q.height)||P.length,N={},U="",T=[],j={dominant:{name:"",count:0}};var O=0;while(O<L){T[0]=P[O];T[1]=P[O+1];T[2]=P[O+2];U=T.join(",");if(U in N){N[U]=N[U]+1}else{N[U]=1}if(K.indexOf(["rgb(",U,")"].join(""))===-1){var V=N[U];if(V>j.dominant.count){j.dominant.name=U;j.dominant.count=V}}O+=S*4}return["rgb(",j.dominant.name,")"].join("")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 9.0
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_glass_parallax(d,l,m){var f=jQuery;var i=f(this);var j=d.parallax||0.25;var k=f("<div>").css({position:"absolute",display:"none",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_glass_parallax").appendTo(m);var h=!d.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;if(h){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(q){h=0}}function t(e){return Math.round(e*1000)/1000}var u=f("<div>").css({position:"absolute",left:0,top:0,overflow:"hidden",width:"100%",height:"100%",transform:"translate3d(0,0,0)",zIndex:1}).appendTo(k);var s=u.clone().appendTo(k);var r=u.clone().css({width:"20%"}).appendTo(k);var c;var p=u.clone().appendTo(k).css({zIndex:0});this.go=function(C,A,x){var e=f(l.get(A));e={position:"absolute",width:e.width(),height:e.height(),marginTop:e.css("marginTop"),marginLeft:e.css("marginLeft")};x=x?1:-1;var E=f(l.get(A)).clone().css(e).appendTo(u);var z=f(l.get(C)).clone().css(e).appendTo(s);var v=f(l.get(C)).clone().css(e).appendTo(r);if(x==-1){r.css({left:"auto",right:0});v.css({left:"auto",right:0})}else{r.css({left:0,right:"auto"});v.css({left:0,right:"auto"})}var D=(m.width()||d.width)*1.3;var B=m.height()||d.height;var y;if(h){if(!c){c=f("<canvas>").css({position:"absolute",left:0,top:0}).attr({width:e.width,height:e.height}).appendTo(p)}c.css(e).attr({width:e.width,height:e.height});y=o(f(l.get(C)),e,10,c.get(0))}if(!h||!y){h=0}wowAnimate(function(G){G=f.easing.swing(G);var L=t(x*G*D),F=t(x*(-D+G*D-(1-G)*D*0.2)),J=t(x*(-D*1.4+G*(D*1.4+D/1.3))),w=t(-x*D*j*G),H=t(x*D*j*(1-G)),I=t(-x*D*(j+0.2)*G),K=t(x*(-D*0.2+G*D*0.4));if(d.support.transform){u.css("transform","translate3d("+L+"px,0,0)");E.css("transform","translate3d("+w+"px,0,0)");s.css("transform","translate3d("+F+"px,0,0)");z.css("transform","translate3d("+H+"px,0,0)");r.css("transform","translate3d("+J+"px,0,0)");v.css("transform","scale(1.6) translate3d("+I+"px,0,0)");p.css("transform","translate3d("+K+"px,0,0)")}else{u.css("left",L);E.css("margin-left",w);s.css("left",F);z.css("margin-left",H);r.css("left",J);v.css("margin-left",I);p.css("left",K)}},0,1,d.duration,function(){k.hide();E.remove();z.remove();v.remove();i.trigger("effectEnd")})};function o(C,A,B,v){var F=(parseInt(C.parent().css("z-index"))||0)+1;if(h){var I=v.getContext("2d");I.drawImage(C.get(0),0,0,A.width,A.height);if(!a(I,0,0,v.width,v.height,B)){return 0}return f(v)}var J=f("<div></div>").css({position:"absolute","z-index":F,left:0,top:0}).css(A).appendTo(v);var H=(Math.sqrt(5)+1)/2;var w=1-H/2;for(var z=0;w*z<B;z++){var D=Math.PI*H*z;var e=(w*z+1);var G=e*Math.cos(D);var E=e*Math.sin(D);f(document.createElement("img")).attr("src",C.attr("src")).css({opacity:1/(z/1.8+1),position:"absolute","z-index":F,left:Math.round(G)+"px",top:Math.round(E)+"px",width:"100%",height:"100%"}).appendTo(J)}return J}var g=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var n=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function a(am,U,S,v,w,ad){if(isNaN(ad)||ad<1){return}ad|=0;var ah;try{ah=am.getImageData(U,S,v,w)}catch(al){console.log("error:unable to access image data: "+al);return false}var C=ah.data;var ab,aa,aj,ag,J,M,G,A,B,R,H,T,P,X,ac,K,F,L,N,W;var ak=ad+ad+1;var Y=v<<2;var I=v-1;var af=w-1;var E=ad+1;var ae=E*(E+1)/2;var V=new b();var Q=V;for(aj=1;aj<ak;aj++){Q=Q.next=new b();if(aj==E){var D=Q}}Q.next=V;var ai=null;var Z=null;G=M=0;var O=g[ad];var z=n[ad];for(aa=0;aa<w;aa++){X=ac=K=A=B=R=0;H=E*(F=C[M]);T=E*(L=C[M+1]);P=E*(N=C[M+2]);A+=ae*F;B+=ae*L;R+=ae*N;Q=V;for(aj=0;aj<E;aj++){Q.r=F;Q.g=L;Q.b=N;Q=Q.next}for(aj=1;aj<E;aj++){ag=M+((I<aj?I:aj)<<2);A+=(Q.r=(F=C[ag]))*(W=E-aj);B+=(Q.g=(L=C[ag+1]))*W;R+=(Q.b=(N=C[ag+2]))*W;X+=F;ac+=L;K+=N;Q=Q.next}ai=V;Z=D;for(ab=0;ab<v;ab++){C[M]=(A*O)>>z;C[M+1]=(B*O)>>z;C[M+2]=(R*O)>>z;A-=H;B-=T;R-=P;H-=ai.r;T-=ai.g;P-=ai.b;ag=(G+((ag=ab+ad+1)<I?ag:I))<<2;X+=(ai.r=C[ag]);ac+=(ai.g=C[ag+1]);K+=(ai.b=C[ag+2]);A+=X;B+=ac;R+=K;ai=ai.next;H+=(F=Z.r);T+=(L=Z.g);P+=(N=Z.b);X-=F;ac-=L;K-=N;Z=Z.next;M+=4}G+=v}for(ab=0;ab<v;ab++){ac=K=X=B=R=A=0;M=ab<<2;H=E*(F=C[M]);T=E*(L=C[M+1]);P=E*(N=C[M+2]);A+=ae*F;B+=ae*L;R+=ae*N;Q=V;for(aj=0;aj<E;aj++){Q.r=F;Q.g=L;Q.b=N;Q=Q.next}J=v;for(aj=1;aj<=ad;aj++){M=(J+ab)<<2;A+=(Q.r=(F=C[M]))*(W=E-aj);B+=(Q.g=(L=C[M+1]))*W;R+=(Q.b=(N=C[M+2]))*W;X+=F;ac+=L;K+=N;Q=Q.next;if(aj<af){J+=v}}M=ab;ai=V;Z=D;for(aa=0;aa<w;aa++){ag=M<<2;C[ag]=(A*O)>>z;C[ag+1]=(B*O)>>z;C[ag+2]=(R*O)>>z;A-=H;B-=T;R-=P;H-=ai.r;T-=ai.g;P-=ai.b;ag=(ab+(((ag=aa+E)<af?ag:af)*v))<<2;A+=(X+=(ai.r=C[ag]));B+=(ac+=(ai.g=C[ag+1]));R+=(K+=(ai.b=C[ag+2]));ai=ai.next;H+=(F=Z.r);T+=(L=Z.g);P+=(N=Z.b);X-=F;ac-=L;K-=N;Z=Z.next;M+=v}}am.putImageData(ah,U,S);return true}function b(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 9.0
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
