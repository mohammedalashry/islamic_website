const ffmpeg=require("fluent-ffmpeg");
const fs = require('fs');
const AWS=require("aws-sdk");
const express=require("express");
const s3=new AWS.S3();
const port = process.env.PORT || 3000;
const app= express();
app.use(express.json());
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.php');
});
  app.post("/senddata.html", (req,res)=>{
  const { startVerse, lastVerse } = req.body;
  console.log(startVerse);
  console.log(lastVerse);
  const first=`https://cdn.islamic.network/quran/audio/128/ar.alafasy/${startVerse}.mp3`;
  const second=`https://cdn.islamic.network/quran/audio/128/ar.alafasy/${startVerse+1}.mp3`;
  
ffmpeg({source:first})
.input(second)
.on("end",()=> {
console.log("moda"); 
if ((lastVerse-startVerse)>1){
  var fileurl=repeat(startVerse+2,lastVerse);
  res.send({
    fileurl
  })
}



})
.on("error",(err)=>console.log('error is'+err))
.mergeToFile(`outputs${startVerse+2}.mp3`);


})
app.listen(port, () => {
    console.log('Our express server is up on port 3000');
  });

  
function repeat(i,lastVerse){
  
    const third=`outputs${i}.mp3`;
  const fourth=`https://cdn.islamic.network/quran/audio/128/ar.alafasy/${i}.mp3`;
  i++;
  ffmpeg({source:third})
     .input(fourth)
     .on("end",()=> {
  console.log(`moda${i}`); 
  if (i<=lastVerse){
    repeat(i,lastVerse);
  
  }else{
    
    uploadFile(`outputs${i}.mp3`);
    return uploadFile(`outputs${i}.mp3`);
    
  }
     
    
  })
    .on("error",(err)=>console.log('error is'+err))
    .mergeToFile(`outputs${i}.mp3`);
  }
  const uploadFile = (fileName) => {
   
    fs.readFile(fileName, (err, data) => {
       if (err) throw err;
       const params = {
           Bucket: 'my-new-bucketswx', // pass your bucket name
           Key: fileName, // file will be saved as testBucket/contacts.csv
           Body: data,
           ContentType:"audio/mp3",
           ACL:"public-read",
           ContentDisposition:"inline"
       };
       s3.upload(params, function(s3Err, data) {
           if (s3Err) throw s3Err
           console.log(`File uploaded successfully at ${data.Location}`)
           return data.Location;
       });
    });
  };