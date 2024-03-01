var paginate = 1;
// var load = "/getData"
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function () {
    if (
        $(window).scrollTop() + $(window).height() >=
        $(document).height() - 20
    ) {
        paginate++;
        loadMoreData(paginate);
    }
});

function loadMoreData(paginate) {
    var urlnya = window.location.href.split("?")[1];
    var parameter = new URLSearchParams(urlnya);
    var carivalue = parameter.get("cari");
    if (carivalue == null) {
        url = window.location.origin + "/getDataExplore" + "?page=" + paginate;
    } else {
        url =
            window.location.origin +
            "/getDataExplore" +
            "?cari=" +
            carivalue +
            "&page=" +
            paginate;
    }
    $.ajax({
        url: url,
        type: "GET",
        dataType: "JSON",
        success: function (e) {
            console.log(e);
            e.data.data.map((x) => {
                //likefoto disini untuk ...sesuai dengan relasi di foto(likefoto0)
                var hasilPencarian = x.likefoto.filter(function (hasil) {
                    return hasil.id_user === x.idUser;
                });
                if (hasilPencarian.length <= 0) {
                    userlike = 0;
                } else {
                    userlike = hasilPencarian[0].id_user;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.url,
                    tanggal: x.created_at,
                    jml_comment: x.comments_count,
                    jml_like: x.likefoto_count,
                    idUserLike: userlike,
                    useractive: x.idUser,
                };
                dataExplore.push(datanya);
            });
            getExplore();
        },
        error: function (jqXHR, textStatus, errorThrown) {},
    });

    const getExplore = () => {
        $("#data").html("");
        dataExplore.map((x, i) => {
            $("#data").append(
                `
               
                                    <a href="/detailfoto/${x.id}">
                                        <img class="h-auto mb-3 max-w-[300px] rounded-lg transition duration-500 ease-in-out hover:scale-105"
                                            src="/asset/${x.foto}" alt="" />
                                    </a>
                                   
                                    </div>
                            

                            
                                              
                `
            );
        });
    };
}

function likes(txt, id) {
    $.ajax({
        url: window.location.origin + "/likefotos{id}",
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id,
        },
        success: function (res) {
            console.log(res);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("gagal");
        },
    });
}

//ambil elemen yang dibutuhkan
// var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById("tombol-cari");
// var container = document.getElementById("container");

// //tambahkan event ketika keyword ditulis
// keyword.addEventListener("keyup", function () {
//     //buat ajax
//     var xhr = new XMLHttpRequest();

//     //cek kesiapan ajax
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             container.innerHTML = xhr.responseText;
//         }
//     };

//     //eksekusi ajax
//     xhr.open("GET", "ajax/foto.php?keyword=' + keyword.value'", true);
//     xhr.send();
// }); // perbaikan penulisan
