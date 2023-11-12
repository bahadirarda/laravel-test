# Laravel Proje Dokümantasyonu 🚀

Bu dokümantasyon, Laravel üzerinde gerçekleştirdiğim projenin özetini ve kurulum adımlarını içermektedir.

## Proje Özeti 📄

Bu proje, Laravel yetkinliklerimi test etmek için çeşitli görevlerin tamamlandığı bir web uygulamasıdır.
Projede, modern frontend teknolojileri ile dinamik bir kullanıcı arayüzü oluşturulmuş ve Laravel'in güçlü backend özellikleri ile birleştirilmiştir.

### Kullanılan Teknolojiler 💻
- **Laravel Filament:** Admin paneli için CRUD işlemlerini yönetmek.
- **Blade Template Engine:** Frontend tasarımını yönetmek için kullanıldı..(Sıfırdan yazıldı.)
- **TailwindCSS:** Arayüz stillemesi için kullanıldı.
- **Swiper.JS:** Slider için kullanıldı.
- **reCAPTCHA:** Giriş işlemlerinde bot kullanımını engellemek amacıyla kullanıldı. (DİPNOT: Kodu yazıldı ancak hata vermemesi adına deaktif çünkü canlı bir serverda olmadığı için validator işlemini gerçekleştirmiyor, localhost üzerinde desteği sonlandırılmış.)

### Özellikler ✨
- **CRUD işlevleri:** Create, Read, Update ve Delete işlemlerini DB'ye ve Requestlere uygun şekilde gerçekleştiriyor.
- **Database Seeding:** Örnek veri tabanı içeriğinin hazırlanması.
- **Admin Middleware:** Yönetici işlevlerine erişimi sınırlandırma.
- **ProductPolicy:** Kullanıcının ürünü düzenleme yetkisi olup olmadığını kontrol eder / AdminMiddleware ile karıştırılmamalı(Yönetici yetkileri çok daha fazla genişletilebilir ancak aynı noktada buluşabilirler.)
- **Resource Controllers:** Product, Category ve Tag modelleri için.
- **Kernel Düzenlemesi:** Middleware kaydı.
- **Migrations:** Veritabanı yapılandırması.
- **Routing:** Uygulama rotalarının ayarlanması.
- **ve birkaç ekstra yazılmış kod.**

## Kurulum Adımları 🛠️

Projeyi yerel geliştirme ortamınızda çalıştırmak için aşağıdaki adımları takip edin:

1. Repoyu klonlayın:
   ```
   git clone [repo-url]
   ```
2. Bağımlılıkları yükleyin:
   ```
   composer install
   npm install
   ```
3. `.env` dosyasını yapılandırın ve veritabanı bağlantılarını ayarlayın.
4. Migration ve seed işlemlerini çalıştırın:
   ```
   php artisan migrate

   Dikkat!
    Seed aşamasında kurulum aşağıdaki şekilde olmalıdır. Aksi halde problem yaşayabilirsiniz.
       php artisan db:seed --class=UserSeeder
       php artisan db:seed --class=RolesTableSeeder
       php artisan db:seed --class=UserRoleSeeder
       php artisan db:seed --class=CategorySeeder
       php artisan db:seed --class=TagSeeder
       php artisan db:seed --class=ProductSeeder
   ```
5. Uygulamayı çalıştırın:
   ```
   php artisan serve
   ```
6. Tarayıcınızda `localhost:8000` adresine giderek uygulamayı görüntüleyin.

Teşekkürler! 🎉
