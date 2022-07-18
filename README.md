A.Wordpress


composer require laravel/sanctum
composer require kigamekun/auth-api
composer require kigamekun/marketplace-kiga

#head {
    background: url('http://www.gamingfortheweekend.com/wp-content/uploads/2017/08/News-Banner.png');
    background-size: cover;
    background-repeat: no-repeat;
    object-fit: cover;
    background-position: center;
    min-height: 400px;
    width: 100%;
}



#comments-list {
    height:300px;
    overflow:auto;
}


#comments-list ul li div{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:start;

}


#comments-title {
    margin-bottom:10px;
}

#comments-list ul{
    margin-top:20px;
}

#comments-list {
    height:300px;
    overflow:auto;
}


.comment-body {
    padding:5px;
    background:#f3f3f3;
    margin-bottom:10px;
    border-radius:10px;
}



 Jurusan Sastra Paling Diminati, dari Sastra Inggris hingga Korea
define('WP_ADMIN_DIR', 'admin');  
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);

sudo cp -rf wordpress/ /var/www/GitLKS/ ; cd /var/www/GitLKS/ ; sudo chmod -R 777 wordpress/ ; cd wordpress ; code .

#1E1F29
Prediksi Line Up Mengerikan Barcelona Setelah Robert Lewandowski Gabung: Otomatis Juara Liga Champions?


PREDIKSI line up mengerikan Barcelona setelah Robert Lewandowski gabung menarik dikulik. Sebab, dengan susunan pemain ini, Barcelona bisa tampil membahayakan bagi para rival sehingga membuka peluang bertarung memperebutkan gelar juara.

Ya, Barcelona tampak benar-benar berusaha membenahi skuadnya yang gagal berbicara banyak dalam beberapa musim terakhir. Pembenahan dilakukan dengan mendatangkan pemain-pemain bintang.

Salah satunya ada striker bintang, Robert Lewandowski. Dia direkrut dari Bayern Munich dan resmi diperkenalkan pada Minggu 12 Juli 2022.

Kedatangan Lewandowski tentu saja dinilai bisa membuat lini serang Barcelona makin tajam pada musim depan. Sebab, kehebatannya sudah teruji dalam mencetak gol. Selama di Bayern Munich, dia membukukan 344 gol dan 72 assist dalam 375 penampilannya.

BACA JUGA: Sudah Dapat Robert Lewandowski, Barcelona Kini Fokus Perkuat Pertahanan

Dengan kondisi ini, pelatih Barcelona, Xavi Hernandez, pun dipercaya akan mengandalkan Lewandowski di lini serangnya. Lalu, bagaimana perkiraan susunan pemain yang akan digunakan Xavi musim depan.

BACA JUGA: Memphis Depay Kehilangan Tempat di Barcelona, Dijual ke Tottenham Hotspur?

Xavi bisa menggunakan sejumlah formasi untuk Barcelona pada musim 2022-2023. Salah satunya adalah 4-3-3. Dengan formasi ini, Marc-Andre ter Stegen diyakini akan tetap menjadi penjaga gawang di line up Barcelona.

Kemudian, di lini pertahanan, Xavi bisa menurunkan Sergino Dest. Ini akan menjadi kesempatan lain bagi Dest untuk membuktikan dirinya. Dia bakal bekerja sama menjaga lini berlakang bersama Gerard Pique, Ronald Araujo, dan Jordi Alba di bek kiri. 


Timnas Malaysia 4 Kali Juara di Indonesia, Netizen Malaysia: Katakan kepada ASEAN Kami Raja di Indonesia!

https://img.okezone.com/content/2022/07/16/51/2630600/timnas-malaysia-4-kali-juara-di-indonesia-netizen-malaysia-katakan-kepada-asean-kami-raja-di-indonesia-8QE4DARJeO.jpg

KUALA LUMPUR – Timnas Malaysia mengukir catatan luar biasa kala berlaga di Indonesia. Mereka sukses meraih gelar juara kala dalam kurun waktu 12 tahun terakhir kala mengikuti turnamen di Indonesia. Teranyar, pencapaian manis itu diukir di Piala AFF U-19 2022.

Seperti diketahui, dalam 12 tahun ke belakang, tepatnya pada 2010, Timnas Malaysia senior berhasil meraih gelar Piala AFF 2010 di Jakarta, Indonesia. Kala itu, Harimau Malaya -julukan Timnas Malaysia- sukses mengalahkan tuan rumah, Timnas Indonesia, di final dengan agregat 4-2

Widget Footer
 
- singlepost -> single.php -> entry_content
- multipost -> index.php -> entry_summary

B. REACT JS 


npm i axios;npm i react-router-dom;npm i bootstrap;npm i sweetalert2;npm install react-bootstrap bootstrap;npm i jquery;

import React, { Component,useState,useEffect } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';

 <Router>
        <Routes>
          <Route exact path='/' element={<Home />} />
          <Route path='/login' element={<Login />} />
          <Route path='/test' element={<Test />} />
          <Route path='/register' element={<Register />} />
        </Routes>
</Router>


.floating-button {
  position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
  
}

.floating-button span {
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  justify-content: center;
}

Modal Bootstrap Link
https://react-bootstrap.github.io/components/modal/

    event.preventDefault();
    var choices = $("input[name='choices[]']")
        .map(function () { return $(this).val(); }).get();
    choices = Object.assign({}, choices);

    var res = await axios.post(process.env.REACT_APP_API_URL + '/api/poll', {
        title: $('#title').val(),
        description: $('#description').val(),
        deadline: $('#deadline').val(),
        choices: choices
    }, {
        headers: {
            'Authorization': 'Bearer ' + user.access_token
        }
    }).then(function (response) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Create Poll Successfully !',
            showConfirmButton: false,
            timer: 1500

        })

        setTimeout(() => {
            window.location.reload();
        }, 2000);
    }).catch(function (error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            showConfirmButton: false,
            timer: 1500
        })
    })

