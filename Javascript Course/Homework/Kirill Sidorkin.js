function mas(a){
for (var i=0;i<a.length;i++){
  if ((a[i+1]-a[i])<0){
    return false;
  }
  else{
    if (i===a.length-1){
      return true;
    }
    else{
      continue;
    }
  }
}
}
var a=[1,3,4,1];
a.splice(3,1) ;
mas(a);
