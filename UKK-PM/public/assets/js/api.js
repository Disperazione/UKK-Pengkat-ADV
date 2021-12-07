
if (document.getElementById("frmlogin")) {
    document.getElementById("frmlogin").addEventListener("submit", (e) => {
        e.preventDefault();
      //   console.log('yes')
        const frmData = new FormData(e.target);
      //   console.log(frmData);
        
        const user = Object.fromEntries(frmData);
    //   console.log(user)
        axios
            .post(`http://127.0.0.1:8000/api/kirimlogin`, user)
            .then((res) => {
                console.log(res.data.token);
                window.sessionStorage.setItem(
                    "token",
                    res.data.token
                );
                Swal.fire({
                    icon: 'success',
                    title: 'Sucessfully',
                    text: 'Berhasil Login!',
                    timer: 4000

                  }).then(function() {
                    window.location.href = `${res.data.url}`
                });

               
            })
            .catch((err) => {
                if (err.response) {
                    console.log(err.response.data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: err.response.data.status,
                         timer: 4000
                      })
                    // document.getElementById(
                    //     "info"
                    // ).innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    //     <strong>Opps!</strong> Something went wrong...
                    //         ${Object.values(err.response.data)  
                    //             .map((e) => `<li>${e}</li>`)
                    //             .join("")}
                    //     <button type="button" class="btn-close" data-bs-dismiss="alert"
                    //         aria-label="Close"></button>
                    // </div>`;
                }
            });
    });
}else if (document.getElementById("frmregister")){
    document.getElementById("frmregister").addEventListener("submit", (e) => {
        e.preventDefault();
      //   console.log('yes')
        const frmData = new FormData(e.target);
      //   console.log(frmData);
        
        const user = Object.fromEntries(frmData);
      // console.log(user)
        axios
            .post(`http://127.0.0.1:8000/api/registerpost`, user)
            .then((res) => {
                console.log(res.data);
                window.sessionStorage.setItem(
                    "token",
                    res.data.token
                );
                Swal.fire({
                    icon: 'success',
                    title: res.data.status,
                    text: res.data.message,
                    timer: 4000

                  }).then(function() {
                    window.location.href = `/login`
                });

               
            })
            .catch((err) => {
                if (err.response) {
                    const error = err.response.data.errors;
                    const keys = Object.keys(error);

                    let check = "";

                    keys.forEach((key, index) => {
                        console.log(key,error[key])
                        check +=`
                               <li class="text-danger">${key}:${error[key]}</li>
                            
                        `;
                        // if ( $('#'+key).val() !== "" || $('#'+key).val() !== "" ) {
                        //    return console.log(' ada')
                        // }else{
                        //    return console.log('tidak ada')
                        // }
                        // if ($('#'+key).val().length <= 10 || $('#'+key).val() === ""  ) {
                        //     $('#error_'+key).text(error[key])
                        //     console.log(error[key]);
                        // }
                        // $('#error_'+key).empty()
                        // if($('#'+key).val().length >= 10 || $('#'+key).val() !== "" ){
                        //     $('#error_'+key).empty();

                        // }
                        // console.log(`${key}: ${error[key]}`);
                    });
                    document.getElementById(
                        "info"
                    ).innerHTML = 
                    `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Opps!</strong> Something went wrong... ${check}<button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>`;
            
                }
            });
            // document.getElementById('#info').text = `<span class="text-danger">${key}:${error[key]}</span>`;
    });
            
}else{
    document.getElementById("frmlogout").addEventListener("click", (e) => {
        e.preventDefault();
        axios
            // buat ip public
            .post(`http://127.0.0.1:8000/api/auth/logout`)
            .then((res) => {
                console.log(res);
                // window.sessionStorage.removeItem("token");
                window.location.href = "/www.ngadu!.com";
            })
            .catch((err) => {
                if (err.response) {
                    console.log(err.response.data);
                }
            });
    });


}