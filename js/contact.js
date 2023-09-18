
function sendMail(){
    alert("your message sent successfully");
    var params = {
        name: document.getElementById("name").value ,
        email: document.getElementById("email").value ,
        phone: document.getElementById("phone").value ,
        message: document.getElementById("message").value ,
    };
    
    
    const serviceID = "service_s4k0oy8";
    const templateID = "template_mqua4ug";
    
    emailjs.send(serviceID,templateID,params)
    .then((res) =>{
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("your message sent successfully");
        }
    ).catch((err)=> console.log(err));
}
