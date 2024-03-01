//mengambil si url segment terakhir=id foto
var segmentTerakhir = window.location.href.split("/").pop();

$.ajax({
    //mengambil link yang berlokasi(/detailfoto/idfoto/getdatadetail)
    url:
        window.location.origin +
        "/detailfoto/" +
        segmentTerakhir +
        "/getdatadetail",
    type: "GET",
    dataType: "JSON",
    data: {
        idUser: segmentTerakhir,
    },
    success: function (res) {
        console.log(res);
        $("#fotodetail").prop("src", "/asset/" + res.dataDetailFoto.url);
        $("#judulfoto").html(res.dataDetailFoto.judul_foto);
        $("#deskripsifoto").html(res.dataDetailFoto.deskripsi_foto);
        $("#kategori").html(" #" + res.dataDetailFoto.kategori);
        $("#profil").prop("src", "/asset/" + res.dataDetailFoto.user.pictures);
        $("#username").html(res.dataDetailFoto.user.nama_lengkap);
        $("#profiluser").prop("href", "/profile/" + res.dataDetailFoto.user.id);
        $("#profiluserme").prop("href", "/profile/" + res.idUser);
        $("#jumlahsuka").html(res.Jumlahdata.likefoto_count + " Suka");
        $("#jumlahkomentar").html(res.Jumlahdata.comments_count + " Komentar");

        if (res.Jumlahdata.id_user != null) {
            if (res.Jumlahdata.id_user !== res.idUser) {
                $("#drop").html(``);
            }
        }

        menampilkankomentar();
        likefoto();
    },

    error: function (jqXHR, textStatus, errorThrown) {
        alert("gagal");
    },
});

function menampilkankomentar() {
    //link
    $.getJSON(
        window.location.origin + "/detailfoto/getkomentar/" + segmentTerakhir,
        function (res) {
            console.log(res);
            if (res.data.length === 0) {
                $("#listkomentar").html("<div>Belum ada komentar</div>"); // Menambahkan titik koma pada akhir pernyataan
            } else {
                comment = [];
                res.data.map((x) => {
                    let datakomentar = {
                        idUser: x.user.id,
                        pengirim: x.user.nama_lengkap,
                        waktu: x.created_at,
                        isikomentar: x.isi_komentar,
                        potopengirim: x.user.pictures,
                    };
                    comment.push(datakomentar);
                });
                tampilkankomentar();
            }
        }
    );
}
const tampilkankomentar = () => {
    $("#listkomentar").html("");
    comment.map((x, i) => {
        $("#listkomentar").append(`
        <div class="flex gap-3 mt-3">
                            <div class="overflow-hidden w-[50px] ">

                            <a href= "/profile/${x.idUser}">
                                                            <img src="/asset/${
                                                                x.potopengirim
                                                            }" class="rounded-full w-[50px] h-[50px] overflow-hidden object-cover" alt="" />
                            </div>
                            <div class="flex flex-col ">
                                <div class="font-bold">${x.pengirim}</div>
                                </a>
                                <div class="text-gray-500 text-[12px]">${new Date(
                                    x.waktu
                                ).toLocaleDateString("id")}</div>
                                <div class="flex w-56 h-full flex-wrap">
                                ${x.isikomentar}
                                </div>
                            </div>
                        </div>
        `);
    });
};

function kirimkankomentar() {
    $.ajax({
        url: window.location.origin + "/detailfoto/kirimkomentar/",
        type: "POST",
        dataType: "json",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: segmentTerakhir,
            isi_komentar: $('input[name="isikomentar"]').val(),
        },
        success: function (res) {
            $('input[name="isikomentar"]').val("");
        },
        error: function (jqXHR, text, errorThrown) {
            alert("gagal mengirim komentar");
        },
    });
}

setInterval(menampilkankomentar, 500);

function likefoto() {
    var segmentTerakhir = window.location.href.split("/").pop();
    //link
    $.getJSON(
        window.location.origin + "/detailfoto/likefoto/" + segmentTerakhir,
        function (res) {
            console.log(res);

            var hasilPencarian = x.likefoto.filter(function (hasil) {
                return hasil.id_user === x.idUser;
            });
            if (hasilPencarian.length <= 0) {
                userlike = 0;
            } else {
                userlike = hasilPencarian[0].id_user;

                like = [];
                res.Jumlahdata.map((x) => {
                    let likefoto = {
                        id: x.id,
                        idfoto: x.id,
                        idUser: x.id_user,
                        idUserLike: userlike,
                        useractive: x.idUser,
                    };
                    like.push(likefoto);
                    console.log(userlike);
                    console.log(x.idUser);
                });
                tampilkansuka();
            }
        }
    );
}

$(document).ready(function () {
    $("#btn-like").on("click", function () {
        if ($("#btn-like").hasClass("bi-heart")) {
            $("#btn-like").removeClass("bi-heart").addClass("bi-heart-fill");
        } else {
            $("#btn-like").removeClass("bi-heart-fill").addClass("bi-heart");
        }
    });
});

function likkes(txt, id) {
    var segmentTerakhir = window.location.href.split("/").pop();
    var id = segmentTerakhir;
    $.ajax({
        url: window.location.origin + "/detailfoto/likefoto/" + id,
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id,
        },
        success: function (res) {
            if (res.liked) {
                $(this).find("#btn-like").addClass("bi bi-heart-fill");
                $(this).find("#btn-like").removeClass("bi bi-heart");
            } else {
                $(this).find("#btn-like").addClass("bi bi-heart");
                $(this).find("#btn-like").removeClass("bi bi-heart-fill");
            }
            console.log(res);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("gagal");
        },
    });
}
