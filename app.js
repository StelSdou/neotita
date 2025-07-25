// app.js
const express = require('express');
const path = require('path');
const app = express();

// Serve static React files
app.use(express.static(path.join(__dirname, 'build')));

// Optional API
app.get('/api/hello', (req, res) => {
  res.json({ message: 'Γεια από το backend!' });
});

// Serve index.html for other routes
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, 'build', 'index.html'));
});

// 404 handler
app.use((req, res) => {
  res.status(404).sendFile(path.join(__dirname, 'build', '404.html'));
});

// 500 handler
app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).sendFile(path.join(__dirname, 'build', '500.html'));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`✅ Server running on port ${PORT}`);
});
