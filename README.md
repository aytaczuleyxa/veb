# 🛡️ SQL Injection Vulnerability Lab (Instagram-Style Login)

Bu layihə, veb tətbiqlərdə ən təhlükəli boşluqlardan biri olan **SQL Injection (SQLi)** hücumunu və ondan qorunma yollarını praktiki şəkildə nümayiş etdirmək üçün hazırlanmışdır.

---

## 📝 Layihənin Təsviri
Layihə sadə bir "Instagram Login" interfeysindən və bu interfeysdən gələn məlumatları emal edən backend (PHP) hissəsindən ibarətdir. Laboratoriya işinin məqsədi filtrasiya olunmamış girişlərin verilənlər bazasına necə təsir etdiyini göstərməkdir.

### Texnologiyalar:
* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL (MariaDB)

---

## ⚠️ Zəiflik Analizi (The Vulnerability)

`login.php` faylında istifadəçi tərəfindən göndərilən `$u` və `$p` dəyişənləri heç bir təmizləmə prosesindən keçmədən birbaşa SQL sorğusuna daxil edilir:

```php
$u = $_POST['istifadeci'];
$p = $_POST['sifre'];

$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
