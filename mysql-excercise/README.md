# Bài tập MySQL

# **- Tạo bảng**
- **KHACHHANG** (MAKH, HOTEN, DCHI, SODT, NGSINH, DOANHSO, NGDK) <br>
````
CREATE table KHACHHANG (
    MAKH CHAR(4) NOT NULL,
    HOTEN VARCHAR(40),
    DCHI VARCHAR(50),
    SODT VARCHAR(20),
    NGSINH DATE,
    NGDK DATE,
    DOANHSO FLOAT,
    PRIMARY KEY (MAKH)
  )
````
- **NHANVIEN** (MANV,HOTEN, NGVL, SODT)
````
CREATE table NHANVIEN (
    MANV CHAR(4) NOT NULL,
    HOTEN VARCHAR(40),
    SODT VARCHAR(20),
    NGVL DATE,
    PRIMARY KEY (MANV)
)
````
- **SANPHAM** (MASP,TENSP, DVT, NUOCSX, GIA)
````
CREATE table SANPHAM (
    MASP CHAR(4) NOT NULL,
    TENSP VARCHAR(40),
    DVT VARCHAR(20),
    NUOCSX VARCHAR(40),
    GIA FLOAT,
    PRIMARY KEY (MASP)
)
````
- **HOADON** (SOHD, NGHD, MAKH, MANV, TRIGIA)
````
CREATE table HOADON (
    SOHD INT NOT NULL,
    NGHD DATE,
    MAKH CHAR(4),
    MANV CHAR(4),
    TRIGIA FLOAT,
    PRIMARY KEY (SOHD)
)
````
- **CTHD** (SOHD,MASP,SL)CTHD (SOHD,MASP,SL)
````
CREATE table CTHD (
    SOHD INT NOT NULL,
    MASP CHAR(4),
    SL INT,
    PRIMARY KEY (SOHD,MASP)
)
````

# **- Tạo câu lệnh Insert, update và xoá dữ liệu**
1. Tạo các quan hệ và khai báo các khóa chính, khóa ngoại của quan hệ.
- Tạo khoá ngoại cho thuộc tính MAKH cho bảng HOADON:
````
ALTER TABLE HOADON
ADD CONSTRAINT fk_MAKH
FOREIGN KEY (MAKH)
REFERENCES KHACHHANG (MAKH);
````
- Tạo khoá ngoại cho thuộc tính MANV cho bảng HOADON:
````
ALTER TABLE HOADON
ADD CONSTRAINT fk_MANV
FOREIGN KEY (MANV)
REFERENCES NHANVIEN (MANV);
````
- Tạo khoá ngoại cho thuộc tính SOHD cho bảng CTHD:
````
ALTER TABLE CTHD
ADD CONSTRAINT fk_SOHD
FOREIGN KEY (SOHD)
REFERENCES HOADON (SOHD);
````
- Tạo khoá ngoại cho thuộc tính MASP cho bảng CTHD:
````
ALTER TABLE CTHD
ADD CONSTRAINT fk_MASP
FOREIGN KEY (MASP)
REFERENCES SANPHAM (MASP);
````
