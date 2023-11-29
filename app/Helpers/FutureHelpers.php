<?php

if (!function_exists('sayfaKategoriAgaci')) {
    function sayfaKategoriAgaci($ustKategoriId = null)
    {
        $kategoriler = \DB::table('sayfa_kategorileri')
            ->where('ust_id', $ustKategoriId)
            ->orderBy('kategori_adi', 'asc')
            ->get();

        $html = '';

        if ($kategoriler->count() > 0) {
            $html .= '<div class="table-responsive">';
            $html .= '<table class="table table-bordered table-sm table-striped my-2">';
            $html .= '<thead>';
            $html .= '<tr>';
            $html .= '<th style="width: 10px">';
            $html .= '<input type="checkbox" class="form-check-input" id="checkAll">';
            $html .= '</th>';
            $html .= '<th>Kategori Adı</th>';
            $html .= '<th style="width: 250px">Üst Kategorisi</th>';
            $html .= '<th style="width: 50px">Toplam</th>';
            $html .= '<th style="width: 75px">İşlemler</th>';
            $html .= '</tr>';
            $html .= '</thead>';
            $html .= '<tbody>';

            foreach ($kategoriler as $kategori) {
                $html .= '<tr>';
                $html .= '<td class="align-middle">';
                $html .= '<input type="checkbox" class="form-check-input secenek" value="' . $kategori->uuid . '" id="check' . $kategori->id . '">';
                $html .= '</td>';
                $html .= '<td class="align-middle">';

                if ($kategori->ust_id != 0) {
                    $html .= '<i class="fa-thin fa-arrow-right-from-line ps-2"></i>';
                }

                $html .= $kategori->kategori_adi;
                $html .= '</td>';
                $html .= '<td class="align-middle">';

                if ($kategori->ust_id == 0) {
                    $html .= 'Ana Kategori';
                } else {
                    $ustKategori = ustKategorisi($kategori->id);
                    $html .= $ustKategori ? $ustKategori->kategori_adi : '';
                }

                $html .= '</td>';
                $html .= '<td class="align-middle text-center">' . kacSayfaVar($kategori->id) . '</td>';
                $html .= '<td class="align-middle">';
                $html .= '<div class="d-flex justify-content-between align-items-center">';
                $html .= '<button type="button" class="btn btn-primary btn-sm kategoriDuzenle"';
                $html .= 'data-dil="' . $kategori->dil . '"';
                $html .= 'data-ustid="' . $kategori->ust_id . '"';
                $html .= 'data-kategoriadi="' . $kategori->kategori_adi . '"';
                $html .= 'data-kategoriid="' . $kategori->id . '"';
                $html .= '>';
                $html .= '<i class="fal fa-edit"></i>';
                $html .= '</button>';
                $html .= '<form action="{{route("admin.sayfa-kategori-sil")}}" method="post" id="deleteForm' . $kategori->uuid . '">';
                $html .= csrf_token();
                $html .= '<input type="hidden" name="uuid" value="' . $kategori->uuid . '">';
                $html .= '<button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(\'deleteForm' . $kategori->uuid . '\')">';
                $html .= '<i class="fal fa-trash"></i>';
                $html .= '</button>';
                $html .= '</form>';
                $html .= '</div>';
                $html .= '</td>';
                $html .= '</tr>';

                // Alt kategorileri kontrol etmek için sayfaKategoriAgaci fonksiyonunu tekrar çağırın
                $html .= '<tr>';
                $html .= '<td colspan="5">' . sayfaKategoriAgaci($kategori->id) . '</td>';
                $html .= '</tr>';
            }

            $html .= '</tbody>';
            $html .= '</table>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
}

if (!function_exists('ustKategorisi')) {
    function ustKategorisi($kategoriId)
    {
        $kategori = \App\Models\Back\Sayfa\SayfaKategori::find($kategoriId);

        return $kategori ? $kategori->ustKategorisi : null;
    }
}

if (!function_exists('kacSayfaVar')) {
    function kacSayfaVar($kategoriId)
    {
        $kategori = \App\Models\Back\Sayfa\SayfaKategori::find($kategoriId);

        return $kategori ? $kategori->kacSayfaVar->count() : 0;
    }
}

/* Tarih formatı gün ay yıl */
if (!function_exists('tarih')) {
    function tarih($tarih)
    {
        return date('d.m.Y', strtotime($tarih));
    }
}
