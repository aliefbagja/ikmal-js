var origins = ['www.bosball.com', 'b.com', 'c.com', 'boobies.com'];
for(var i=0;i<origins.length;i++){
    var origin = origins[i];
    if(req.headers.origin.indexOf(origin) > -1){ 
         res.setHeader('Access-Control-Allow-Origin', req.headers.origin);
         return;
    }
    // else, tough cookies. 
}
