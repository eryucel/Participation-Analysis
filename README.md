# Ders-Analiz

### Çalışma Mantığı
Üniversitelerin sınıf kapılarına nodeMcu(Esp8266 wifi modülü bulunan programlanabilir devre kartı) ve lazer sensörler yerleştirilir. 

Öğrenciler sınıflara girdiğinde lazer sensör ile etkileşime geçer.Bu etkileşim bilgisi wifi bağlı nodeMcu sayesinde HTTP GET Request ile sunucuya iletilir. Gönderilen bilgi içerisinde etkileşimde bulunulan nodeMcu için tanımlanmış eşsiz bir anahtar bilgisi de bulunuğu için hangi sınıfa öğrenci girdiği anlaşılır.

Toplamda oluşan etkileşim verileri sayesinde herhangi bir ders için katılım yüzdesi elde edilir. Veriler analiz edilir ve grafiklerle kullanıcıya sunulur.

![Use-case,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/UC.png)


### Derse Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/Dersler.png)

### Bir Derse Öğretim Üyelerine göre Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/Öğretim.png)

### Bir Derse Ders Saatlerine göre Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/Saat.png)



## Veri Girişi
Bir fakültedeki bölüm için öğretim üyeleri, derslikler ve dersler oluşturulabilir ve düzenlenebilir.

Ders, öğretim üyesi, derslik ve tarih eşlenerek ders açılabilir. Açılan derse girmesi gereken öğrenci sayıları belirlenebilir.

Sınıflardaki etkileşimler açılmış bir ders var ise veritabanında otomatik olarak eşlenir. Girilen sınıfta o tarih ve saatte açılmış bir ders yok ise analize etki etmez.

![Tablo,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/DersTablo.png)

## Kullanılan Veritabanı Tasarımı

![Varlık-bağıntı,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/VB.png)
![İş-kuralları,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/İşKuralları.png)
![İlişkisel-Şema,Devam,Katılım,Ders,Analiz](https://github.com/Hakan-er/Ders-Analiz/blob/master/ScreenShots/İlişkiselŞema.png)

# Bu web sitesi www.github.com/melihguler ile birlikte geliştirilmiştir.
