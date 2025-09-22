# Student Management System

A PHP-based student management system demonstrating object-oriented programming concepts including inheritance, encapsulation, and composition.

## 🎯 Overview

This project implements a student management system using PHP's object-oriented programming features. It manages student information, scholarship recipients, and classroom assignments through a well-structured class hierarchy.

## ✨ Features

- **Student Management**: Store and manage student information (ID, name, NIM, department, email, photo)
- **Scholarship System**: Extended functionality for scholarship recipients with IPK and scholarship type
- **Classroom Management**: Assign students to classrooms and display classroom information
- **Data Validation**: Input validation for student data (e.g., name must be string)
- **Inheritance**: Demonstrates OOP inheritance with `MhsBeasiswa` extending `Mahasiswa`
- **Composition**: Shows composition pattern with `Kelas` containing `Mahasiswa` objects

## 📁 Project Structure

```
web-dev/
├── main.php           # Main execution file with example usage
├── mahasiswa.php      # Base Mahasiswa (Student) class
├── beasiswa.php       # MhsBeasiswa (Scholarship Student) class
├── kelas.php          # Kelas (Class/Classroom) class
├── README.md          # Project documentation
└── LICENSE            # MIT License
```

## 🏗️ Class Architecture

### Inheritance Hierarchy
```
Mahasiswa (Base Class)
    └── MhsBeasiswa (Scholarship Student - inherits from Mahasiswa)

Kelas (Classroom Class - uses composition with Mahasiswa)
```

### Class Relationships
- **Inheritance**: `MhsBeasiswa` extends `Mahasiswa`
- **Composition**: `Kelas` contains a `Mahasiswa` object
- **Polymorphism**: Both `Mahasiswa` and `MhsBeasiswa` can be used in `Kelas`

## 🚀 Installation

1. **Prerequisites**: Ensure you have a PHP environment running (XAMPP, WAMP, or similar)

2. **Clone or Download**: Place the project files in your web server directory
   ```bash
   # If using XAMPP
   C:\xampp\htdocs\web-dev\
   ```

3. **No Database Required**: This project uses in-memory objects (no database setup needed)

## 💻 Usage

1. **Start your web server** (Apache in XAMPP)

2. **Run the application**:
   ```bash
   # Navigate to your project URL
   http://localhost/web-dev/main.php
   ```

3. **View Output**: The application will display information about students and their assigned classrooms

## 📚 Classes Documentation

### `Mahasiswa` Class
The base student class with the following properties:
- `$id`: Student ID
- `$nama`: Student name
- `$nim`: Student identification number
- `$jurusan`: Department/Major
- `$email`: Email address
- `$gambar`: Profile photo filename

**Key Methods**:
- `__construct()`: Initialize student with optional parameters
- `setNama($nama)`: Set student name with validation
- `tampilkanData()`: Display student information

### `MhsBeasiswa` Class
Extends `Mahasiswa` for scholarship recipients:
- Additional properties: `$ipk` (GPA), `$jenisBeasiswa` (scholarship type)
- Inherits all methods from `Mahasiswa`
- Overrides `tampilkanData()` to include scholarship information

### `Kelas` Class
Manages classroom assignments:
- `$ruangKelas`: Classroom number/name
- `$mahasiswa`: Associated student object
- `tampilkanKelas()`: Display classroom and student information

## 🔍 Examples

### Creating a Regular Student
```php
$student = new Mahasiswa(1, "Amanda", "72180220", "MAN", "amanda@ciputra.ac.id", "amanda.jpg");
```

### Creating a Scholarship Student
```php
$scholarshipStudent = new MhsBeasiswa();
$scholarshipStudent->setId(2);
$scholarshipStudent->setNama("Tulus");
$scholarshipStudent->setIpk(3.8);
$scholarshipStudent->setJenisBeasiswa("Ruby");
```

### Creating a Classroom
```php
$classroom = new Kelas("605", $student);
$classroom->tampilkanKelas();
```

## 🔧 Requirements

- **PHP**: Version 7.4 or higher (uses nullable type declarations)
- **Web Server**: Apache, Nginx, or similar
- **No Database**: Project uses in-memory objects

## 🛠️ Development Features

- **Type Declarations**: Uses PHP 7+ nullable types (`?int`, `?string`)
- **Exception Handling**: Input validation with `InvalidArgumentException`
- **Method Overriding**: Demonstrates polymorphism with `tampilkanData()`
- **Encapsulation**: Protected properties with getter/setter methods
- **Constructor Overloading**: Flexible constructors with optional parameters

## 📝 Sample Output

When you run `main.php`, you'll see output like:
```
---
Ruang Kelas : 605
Mahasiswa  :
NO.       : 1
Nama      : Amanda
NIM       : 72180220
Jurusan   : MAN
Email     : amanda@ciputra.ac.id
Foto      : amanda.jpg

---
Ruang Kelas : 606
Mahasiswa  :
NO.       : 2
Nama      : Tulus
NIM       : 72180221
Jurusan   : IMT
Email     : tulus@ciputra.ac.id
Foto      : tulus.jpg
IPK         : 3.8
Jenis Beasiswa: Ruby
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
