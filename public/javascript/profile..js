//mengambil si url segment terakhir=id foto
var segmentTerakhir = window.location.href.split("/").pop();

$.getJSON(
    window.location.origin + "/profile/getprofil/" + segmentTerakhir,
    function (res) {
        console.log(res);
        $("#username").html(res.dataUser.nama_lengkap);
        $("#jk").html(res.dataUser.jenis_kelamin);
        $("#tgllahir").html(res.dataUser.tgl_lahir);
        $("#alamat").html(res.dataUser.alamat);
        $("#bio").html(res.dataUser.bio);
        $("#profil").prop("src", "/asset/" + res.dataUser.pictures);
        if (res.dataUserActive === res.dataUser.id) {
            $("#Upload").html(
                `<div class="w-20 h-20 bg-red-500 rounded-full flex fixed bottom-6 right-5 "><a
                href="/upload" class="text-xl m-auto"><i
                    class="bi bi-plus text-6xl font-extrabold text-white"></i></a>
        </div>`
            );
        } else {
            if (res.dataUserActive == null) {
                $("#Upload").html("");
            }
        }
        if (res.dataUserActive === res.dataUser.id) {
            $("#Editpp").html(
                `   <a href="/editpp"><i class="bi bi-pencil-square text-3xl"></i></a>`
            );
        } else {
            if (res.dataUserActive == null) {
                $("#Editpp").html("");
            }
        }
    }
);

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
    $.ajax({
        url: "/getDatafotoprofile/" + "?page=" + paginate,
        type: "GET",
        dataType: "JSON",
        data: {
            idUser: segmentTerakhir,
        },
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
        $("#datafoto").html("");
        dataExplore.map((x, i) => {
            $("#datafoto").append(
                `
                                <div>
                                    <a href="/detailfoto/${x.id}">
                                        <img class="h-auto mb-4 max-w-[300px] rounded-lg transition duration-500 ease-in-out hover:scale-105"
                                            src="/asset/${x.foto}" alt="" />
                                    </a>
                                </div>                
                `
            );
        });
    };
}
