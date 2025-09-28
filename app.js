// varibles
const mysql = require('mysql2/promise');
const express = require('express');
const path = require('path');
const app = express();

// DataBase
require('dotenv').config();
const conn = mysql.createPool({
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASS,
  database: process.env.DB_NAME
});

// Serve index.html for other routes
app.use(express.static(path.join(__dirname, 'build')));

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'home.html'));
});

app.get('/helps', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'katixHelp.html'));
});

app.get('/plan', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'plan.html'));
});

app.get('/booklibr', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'library.html'));
});

app.get('/book', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'book.html'));
})

//apis
app.get('/img/carousel/:name', (req, res) => {
  const param = req.params.name + ".jpg";
  const imgPath = path.join(__dirname, 'build', 'carousel', param);

  res.sendFile(imgPath, (err) => {
    if (err){
      res.status(404);
    }
  });
});


app.get('/api/carousel', async (req, res) => {
  try {
    const [rows] = await conn.query(
      'SELECT img, title FROM carousel WHERE deadLine = "0000-00-00" OR deadLine >= CURDATE();'
    );
    res.json(rows);
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Database error' });
  }
});

app.get('/covers/:name', (req, res) => {
  console.log("you are in covers");
  const param = req.params.name + ".png";
  const imgPath = path.join(__dirname, 'build', 'covers', param)

  res.sendFile(imgPath, (err) => {
    if (err){
      res.status(404).sendFile(path.join(__dirname, 'build', 'covers', '0000.jpg'))
    }
  });
});

app.get('/api/book/:year', async (req, res) => {
  const param = parseInt(req.params.year, 10);
  console.log("You are in books with year = " + param)
  try {
    const [rows] = await conn.query(
      'SELECT * FROM books WHERE year = ?;',
      [param]
    );
    res.json(rows);
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Database error' });
  }
});


// 404 handler
app.use((req, res) => { res.status(404).sendFile(path.join(__dirname, 'build', '404.html')); });
// 500 handler
app.use((err, req, res, next) => {
  console.error(err.stack);
    res.status(500).sendFile(path.join(__dirname, 'build', '500.html'));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`✅ Server running on port ${PORT}`);
});
