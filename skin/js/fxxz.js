// JavaScript Document

 

<!--首页幻灯专用-->

function getid(o){ return (typeof o == "object")?o:document.getElementById(o);}
	
function getNames(obj,name,tij)
	{
		var plist = getid(obj).getElementsByTagName(tij);
		var rlist = new Array();
		for(i=0;i<plist.length;i++){if(plist[i].getAttribute("name") == name){rlist[rlist.length] = plist[i];}}
		return rlist;
	}
	function fiterplay(obj,num,t,name,c1,c2)
	{
		var fitlist = getNames(obj,name,t);
		for(i=0;i<fitlist.length;i++)
		{
			if(i == num)
			{
				fitlist[i].className = c1;
			}
			else
			{
			fitlist[i].className = c2;
			}
		}
	}
	function play(obj,num)
	{
		var s = getid('simg');
		var i = getid('info');
		var b = getid('bimg');
		try	
		{
		with(b)
			{
				filters[0].Apply();	
				fiterplay(b,num,"div","f","show","dis1");	
				fiterplay(s,num,"div","f","s","");	
				fiterplay(i,num,"div","f","show","dis1");	
				filters[0].play();
			}
		}
		catch(e)

		{
				fiterplay(b,num,"div","f","show","dis1");	
				fiterplay(s,num,"div","f","s","");	
				fiterplay(i,num,"div","f","show","dis1");	
		}
	}
	
function format()
	{
		var s = getid('simg');
		var l = getNames(s,"f","div")
		for(i=0;i<l.length;i++)
		{
			l[i].num = i;
			l[i].onclick = function()
			{
			play(this,this.num);
			}
		}
	}
	var autoStart = 0;
	var n = 0;
	
	function clearAuto() {clearInterval(autoStart);};
	function setAuto(){autoStart=setInterval("auto(n)", 3000)}
	function auto()
	{
		var s = getid("simg");
		var x = getNames(s,"f","div");
		n++;
		if(n>(x.length-1))
		{ n = 0; }
		play(x[n],n);
	}
	
	
//列表页每五行就分开一下 需要JQ支持
function showListLi(liobj,num,html,cls)
{
  var obj=$("#"+liobj+" "+ html);
  
 // alert(liobj)
  var n=0;
  for(var i=0 ;i< obj.length;i++)
  {
	  if  (n==num)
	  {
		  obj.eq(i).after("<"+html+" class='"+cls+"'> </"+html+">");
		  n=0;
	  }
	  n++;
  }
}


//列表页效果

 //设置表格背景颜色	
function  setListClick()
{
  var obj=$(".List_like");
	  obj.mouseover(function(){$(this).css("background","url(/skin/images/list_bj.gif) repeat-x")});
	 //obj.mouseover(function(){$(this).css("background-image","url(/skin/images/list_bj.gif)")});
	 //obj.mouseout(function(){$(this).css("background-color","#FFF2BF")});
	 obj.mouseout(function(){$(this).css("background","")});
}


//搜索专用
function show_search()
{
	if(document.getElementById('headSel').style.display=='none')
	{
		document.getElementById('headSel').style.display='block';
	}
	else
	{
		document.getElementById('headSel').style.display='none';
		};
	return false;
}

function drop_mouseout(pos){
	var posSel=document.getElementById(pos+"Sel").style.display;
	if(posSel=="block"){
		timer = setTimeout("drop_hide('"+pos+"')", 1000);
	}
}
function drop_hide(pos){
	document.getElementById(pos+"Sel").style.display="none";
}
function drop_mouseover(pos){
	try{window.clearTimeout(timer);}catch(e){}
}


function search_show(pos,sType,href){
	var fm = document.topForm;
	//document.getElementById('keyword').name="keyword";
	//fm.target="_self";
	
    fm.searchType.value=sType;
    document.getElementById(pos+"Sel").style.display="none";
    document.getElementById(pos+"Slected").innerHTML=href.innerHTML;
    fm.keyword.focus();
	try{window.clearTimeout(timer);}catch(e){}
	return false;
}

function search_ckdt()
{
	var fm = document.topForm;
	var sov = fm.so.value;
	sType = fm.searchType.value;
	if(sov=='') {alert("请输入搜索关键字");return false;}
	if(sov=='单机游戏' || sov=='单机游戏下载'){ fm.action="http://www.cr173.com/"; return true; }
	if(sType)return true;
	document.getElementById('so').name="so";fm.target="_self";fm.action="http://www.cr173.com/search.asp";
	var zkey = ["怎么","怎样","如何","求助","哪里","什么","跪求","为何","多少","多大","谁","吗","多久","哪个","为啥"];
	for(var s in zkey)
	{
		if(sov.indexOf(zkey[s])!=-1)
		{
			fm.action="http://www.cr173.com/";document.getElementById('so').name="key";fm.target="_blank";
			return true;
		}
	}
	return true;
}

function change_searchtyp(sType){
  var fm = document.Search_form;
  document.getElementById('so').name="so";fm.target="_self";
  if(sType=='tech'){
	  fm.action="http://www.cr173.com/";
	  document.getElementById('_searchType').className="";
	  document.getElementById('_searchTypetech').className="active";
	  document.getElementById('_searchTypeask').className="";
	  
  }
  else if(sType=='ask'){
	  fm.action="http://www.cr173.com/";
	  document.getElementById('so').name="key";
	  fm.target="_blank";
	  document.getElementById('_searchType').className="";
	  document.getElementById('_searchTypetech').className="";
	  document.getElementById('_searchTypeask').className="active";
  }
  else{
	  fm.action="http://www.cr173.com/";
	  document.getElementById('_searchType').className="active";
	  document.getElementById('_searchTypetech').className="";
	  document.getElementById('_searchTypeask').className="";
  }
  fm.searchType.value=sType;
  fm.so.focus();
  return false;
}
	





// 标签高亮
function colorTags(id){
	
	var BLACK = 1- 0.618, //黑色的比例, 取值0-1
		COLOR = '#f00,#090,#00f,#f60,#09f,#f0f',
		FONTSIZE = ['16px','14px','12px'],
		cp = [],
		colors = [],
		current = '',
		tags = document.getElementById(id).getElementsByTagName('a'),
		length = tags.length,
		black_count = 0,
		black_total = Math.ceil(BLACK*(length - 1));

	//按比例生成数组
	for(var i = 0 ; i < length; i++){
		cp[i] =  i > black_total ? 	'color' :  'black';
	}
	
	//乱序
	cp.sort(function(a,b){
		return Math.random()>.5 ? -1 : 1;				  
	});



	for(var i = 0 ; i < length; i++){
		if( cp[i] == 'color'){
			colors  = COLOR.replace( new RegExp(current + ',?'),'').split(',');
			current = colors[ Math.floor(Math.random()*(colors.length-1))];
			tags[i].style.color = current;
		} else {
			current = '#333';	
		}
			tags[i].style.fontSize =  FONTSIZE[ Math.floor( Math.random()*3 ) ];

	}
	
	
	id == "tags_list_left_bot" && splitTags(id,20)
	
	
}


function splitTags(id,num){
	
	var wrap = document.getElementById(id),
		tags = wrap .getElementsByTagName('a'),
		br = document.createElement('div');
	
	br.className = 'tag_br';
	for(var i = 1; i< tags.length; i++){
		if(i % num == 0){
				wrap.insertBefore(br.cloneNode(false),tags[i]);
		}  
	}
	
}