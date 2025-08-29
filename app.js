// varibles
const mysql = require('mysql');
const express = require('express');
const path = require('path');
const app = express();

// DataBase
require('dotenv').config();
const conn = mysql.createPool({
  host: process.env.DB_HOST_PUBLIC,
  user: process.env.DB_USER,
  password: process.env.DB_PASS,
  database: process.env.DB_NAME
});

// Serve index.html for other routes
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.get('/helps', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'katixHelp.html'));
});

app.get('/plan', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'plan.html'));
});

app.get('/booklibr', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'library.html'));
});

//apis
app.get('/covers/:name', (req, res) => {
  const param = req.params.name + ".png";
  const imgPath = path.join(__dirname, 'public', 'covers', param)

  res.sendFile(imgPath, (err) => {
    if (err){
      res.status(404).sendFile(path.join(__dirname, 'public', 'covers', '0000.jpg'))
    }
  });
});

app.get('/api/book/:year', async (req, res) => {
  const param = parseInt(req.params.year, 10);
  try {
    const [rows] = await conn.query('SELECT * FROM books WHERE year = ?;', param);
    res.json(rows);
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Database error' });
  }
});


// 404 handler
app.use((req, res) => {
  res.status(404).sendFile(path.join(__dirname, 'public', '404.html'));
});

// 500 handler
app.use((err, req, res, next) => {
  console.error(err.stack);
    res.status(500).sendFile(path.join(__dirname, 'public', 'public/500.html'));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`✅ Server running on port ${PORT}`);
});
