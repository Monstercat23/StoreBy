<?php

function pagination($tong_so_ban_ghi, $so_ban_ghi_mot_trang, $trang_hien_tai, $baseUrl)
{
    $html = '<ul class="page-numbers">';
    $so_trang = ceil($tong_so_ban_ghi / $so_ban_ghi_mot_trang);

    if (strpos($baseUrl, "?")) {
        if ($trang_hien_tai > 1) {
            $trangtruoc = $trang_hien_tai - 1;
            $html = "<ul class='page-numbers'> <li><a class='page-numbers' href='&page=$trangtruoc' class='pagination-prev'><i class='icon-left-4'></i> <span> << </span></a></li>";
        }
    } else {
        if ($trang_hien_tai > 1) {
            $trangtruoc = $trang_hien_tai - 1;
            $html = "<ul class='page-numbers'> <li><a class='page-numbers' href='?page=$trangtruoc' class='pagination-prev'><i class='icon-left-4'></i> <span> << </span></a></li>";
        }
    }
    for ($i = 1; $i <= $so_trang; $i++) {
        if (strpos($baseUrl, "?")) {
            if ($trang_hien_tai == $i) {
                $html .= "<li class='active'> <a class='page-numbers' href='$baseUrl&page=$i'> $i </a></li> ";
                continue;
            }
            $html .= "<li> <a class='page-numbers' href='$baseUrl&page=$i'> $i </a></li> ";
        } else {
            if ($trang_hien_tai == $i) {
                $html .= "<li class='active'> <a class='page-numbers' href='$baseUrl?page=$i'> $i </a></li> ";
                continue;
            }
            $html .= "<li> <a class='page-numbers' href='$baseUrl?page=$i'> $i </a></li> ";
        }
    }

    if (strpos($baseUrl, "?")) {
        if ($trang_hien_tai < $so_trang) {
            $trangsau = $trang_hien_tai + 1;
            $html .= "<li><a class='page-numbers' href='$baseUrl&page=$trangsau' class='pagination-next'><span> >> </span> <i class='icon-right-4'></i></a></li>";
        } else {
            $html .= '</ul>';
        }
        $i = $so_trang;
    } else {
        if ($trang_hien_tai < $so_trang) {
            $trangsau = $trang_hien_tai + 1;
            $html .= "<li><a class='page-numbers' href='$baseUrl?page=$trangsau' class='pagination-next'><span> >> </span> <i class='icon-right-4'></i></a></li>";
        } else {
            $html .= '</ul>';
        }
        $i = $so_trang;
    }

    return $html;
}
