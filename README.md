# Ders-Analiz

### Çalışma Mantığı
Üniversitelerin sınıf kapılarına nodeMcu(Esp8266 wifi modülü bulunan programlanabilir devre kartı) ve lazer sensörler yerleştirilir. 

Öğrenciler sınıflara girdiğinde lazer sensör ile etkileşime geçer.Bu etkileşim bilgisi wifi bağlı nodeMcu sayesinde HTTP GET Request ile sunucuya iletilir. Gönderilen bilgi içerisinde etkileşimde bulunulan nodeMcu için tanımlanmış eşsiz bir anahtar bilgisi de bulunuğu için hangi sınıfa öğrenci girdiği anlaşılır.

Toplamda oluşan etkileşim verileri sayesinde herhangi bir ders için katılım yüzdesi elde edilir. Veriler analiz edilir ve grafiklerle kullanıcıya sunulur.

![Use-case,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/UC.jpg)

### Derse Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/Dersler.jpg)

### Bir Derse Öğretim Üyelerine göre Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/Öğretim.jpg)

### Bir Derse Ders Saatlerine göre Katılım Analizi

![Grafik,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/Saat.jpg)


### Veri Girişi
Bir fakültedeki bölüm için öğretim üyeleri, derslikler ve dersler oluşturulabilir ve düzenlenebilir.

Ders, öğretim üyesi, derslik ve tarih eşlenerek ders açılabilir. Açılan derse girmesi gereken öğrenci sayıları belirlenebilir.

Sınıflardaki etkileşimler açılmış bir ders var ise veritabanında otomatik olarak eşlenir. Girilen sınıfta o tarih ve saatte açılmış bir ders yok ise analize etki etmez.

![Tablo,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/DersTablo.jpg)

### Kullanılan Veritabanı Tasarımı

![Varlık-bağıntı,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/VB.jpg)
![İş-kuralları,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/İşKuralları.jpg)
![İlişkisel-Şema,Devam,Katılım,Ders,Analiz](https://github.com/HakanEryucel/Ders-Analiz/blob/master/Screenshots/İlişkiselŞema.jpg)

# Bu web sitesi www.github.com/melihguler ile birlikte geliştirilmiştir.
