function $(selector){
    return document.querySelector(selector);
}

let otp, firstname, lastname, email, subject, message, loading;
function submitDetails(e, doc){
    e.preventDefault();
    
    firstname = $('#firstname');
    lastname = $('#lastname');
    email = $('#email');
    subject = $('#subject');
    message = $('#message');
    loading = $('#loading');
    otp = generateOTP();

    let form = new FormData();
    form.append('email', email.value);
    form.append('otp', otp);

    loading.classList.remove('hidden');

    fetch('otp.php', {
        method: 'post',
        body: form
    }).then(res => res.text()).then(data=>{
        if(data == 'error'){
            alert('Error occured!');
            loading.classList.add('hidden');
        }else{
            doc.setAttribute('onsubmit', 'submitOTP(event, this);');
            loading.classList.add('hidden');
            showOTPForm();
        }
    })
}

function submitOTP(e, doc){
    e.preventDefault();
    let otpVal = $('#otp');

    if(otpVal.value == otp){
        let form = new FormData();
        form.append('firstname', firstname.value);
        form.append('lastname', lastname.value);
        form.append('email', email.value);
        form.append('subject', subject.value);
        form.append('message', message.value);

        $('#count').classList.add('hidden');    
        $('#loading2').classList.remove('hidden');
    
        fetch('submit.php', {
            method: 'post',
            body: form
        }).then(res=>res.text()).then(data=>{
            location.href = 'success.php';
        })
    }else{
        alert('Mali jusko');
    }
}

function generateOTP(){
    let random, otp = '';
    for(let i=0;i<6;i++){
        random = Math.trunc(Math.random() * 10);
        otp += random;
    }
    return otp;
}

function showOTPForm(){
    let i = 5;
    $('#details-form').classList.add('hidden');
    $('#otp-form').classList.remove('hidden');

    let interval = setInterval(count, 1000);

    function count(){
        if(i == 0){
            $('#count').innerHTML = 'Kabado ang abnoy';
            clearInterval(interval);
            return;
        }
        $('#count').innerHTML = i;
        i--;
    }
}

function clearDetails(){
    $('#firstname').value = '';
    $('#lastname').value = '';
    $('#email').value = '';
    $('#subject').value = '';
    $('#message').value = '';
}