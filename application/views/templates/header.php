<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Residfom | Dashboard</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/skin-yellow.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">

    <style>
        .scroll {
            height: 315px;
            overflow: auto;
            overflow-x: hidden;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script nonce="2c642fe3-48f1-4072-b597-529d06122e66">
        (function(w, d) {
            ! function(e, f, g, h) {
                e.zarazData = e.zarazData || {};
                e.zarazData.executed = [];
                e.zaraz = {
                    deferred: [],
                    listeners: []
                };
                e.zaraz.q = [];
                e.zaraz._f = function(i) {
                    return function() {
                        var j = Array.prototype.slice.call(arguments);
                        e.zaraz.q.push({
                            m: i,
                            a: j
                        })
                    }
                };
                for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
                e.zaraz.init = () => {
                    var l = f.getElementsByTagName(h)[0],
                        m = f.createElement(h),
                        n = f.getElementsByTagName("title")[0];
                    n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
                    e.zarazData.x = Math.random();
                    e.zarazData.w = e.screen.width;
                    e.zarazData.h = e.screen.height;
                    e.zarazData.j = e.innerHeight;
                    e.zarazData.e = e.innerWidth;
                    e.zarazData.l = e.location.href;
                    e.zarazData.r = f.referrer;
                    e.zarazData.k = e.screen.colorDepth;
                    e.zarazData.n = f.characterSet;
                    e.zarazData.o = (new Date).getTimezoneOffset();
                    if (e.dataLayer)
                        for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                                ...s[1],
                                ...t[1]
                            }))))) zaraz.set(r[0], r[1], {
                            scope: "page"
                        });
                    e.zarazData.q = [];
                    for (; e.zaraz.q.length;) {
                        const u = e.zaraz.q.shift();
                        e.zarazData.q.push(u)
                    }
                    m.defer = !0;
                    for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith("_zaraz_"))).forEach((w => {
                        try {
                            e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
                        } catch {
                            e.zarazData["z_" + w.slice(7)] = v.getItem(w)
                        }
                    }));
                    m.referrerPolicy = "origin";
                    m.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
                    l.parentNode.insertBefore(m, l)
                };
                ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="skin-yellow hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <nav class="navbar main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>