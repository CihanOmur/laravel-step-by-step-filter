## Bilgisayarınızda Çalıştırın

### Yeni bir proje oluşturun
Bu kod sizin Laravel'in desteklediği son sürüm ile bir proje oluşturmanızı sağlayacaktır.

```bash
  composer create-project laravel/laravel filter
```

### Model ve Migration oluşturun

Bir adet Products adında model ve migration oluşturalım.

```bash
  php artisan make:model Products -m
```
Daha sonradan sırasıyla `Routes\web.php`, `App\Http\Controllers\Controller.php` ve `App\Models\Products.php` dosyalarını kopyalayıp kendi projenize dahil edin.

### Migration'u Çalıştırın

```bash
  php artisan make:model Products -m

```

### Projeyi Çalıştırın

```bash
  php artisan serve

```
