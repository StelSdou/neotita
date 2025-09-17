import React, { useEffect, useState } from "react";

const MONTHS = [
  { key: "october", label: "Οκτώβριος" },
  { key: "november", label: "Νοέμβριος" },
  { key: "december", label: "Δεκέμβριος" },
  { key: "january", label: "Ιανουάριος" },
  { key: "february", label: "Φεβρουάριος" },
  { key: "march", label: "Μάρτιος" },
  { key: "april", label: "Απρίλιος" },
  { key: "may", label: "Μάιος" },
];

export default function ReactPage() {
  const urlParams = new URLSearchParams(window.location.search);
  const initialYear = parseInt(urlParams.get("variable")) || new Date().getFullYear();

  const [year, setYear] = useState(initialYear);
  const [data, setData] = useState({});
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    // update URL (like original page did with ?variable=YYYY)
    const params = new URLSearchParams(window.location.search);
    params.set("variable", String(year));
    const newUrl = `${window.location.pathname}?${params.toString()}`;
    window.history.replaceState({}, "", newUrl);

    // fetch magazine data for the selected year
    setLoading(true);
    setError(null);
    fetch(`/api/magazines?year=${year}`)
      .then((res) => {
        if (!res.ok) throw new Error("Network response was not ok");
        return res.json();
      })
      .then((json) => {
        setData(json || {});
      })
      .catch((err) => {
        console.error(err);
        setError("Δεν ήταν δυνατή η φόρτωση των περιοδικών. Ελέγξτε το backend.");
        setData({});
      })
      .finally(() => setLoading(false));
  }, [year]);

  function handlePrev() {
    setYear((y) => y - 1);
  }
  function handleNext() {
    setYear((y) => y + 1);
  }

  function handleSelect(monthKey, title) {
    // sends same data as the original POST form (years, month, title)
    fetch("/api/data", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ years: year, month: monthKey, title }),
    })
      .then((res) => {
        if (!res.ok) throw new Error("Post failed");
        // optionally navigate or show a success state
        alert("Επιλέχθηκε το περιοδικό: " + (title || monthKey));
      })
      .catch((err) => {
        console.error(err);
        alert("Σφάλμα κατά την υποβολή — δείτε το console.");
      });
  }

  return (
    <div className="min-h-screen flex flex-col bg-gray-50 text-gray-900">
      {/* NAVBAR */}
      <nav className="bg-gray-800 text-white">
        <div className="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
          <a href="/" className="flex items-center gap-3">
            <img src="/img/logos/Neot_LogoW.png" alt="logo" className="h-10 w-auto" />
            <span className="font-semibold">Περιοδικά</span>
          </a>
          <ul className="hidden md:flex items-center gap-6">
            <li><a href="/" className="hover:underline">Home</a></li>
            <li><a href="/helps" className="hover:underline">Κατηχητικά βοηθήματα</a></li>
            <li><a href="/plan" className="hover:underline">Πλάνο Κατήχησης</a></li>
            <li><a href="#footer" className="hover:underline">Info</a></li>
          </ul>
        </div>
      </nav>

      {/* MAIN */}
      <main className="flex-1 max-w-6xl mx-auto px-4 py-8">
        <div className="mb-6 flex items-center justify-between">
          <h2 className="text-3xl font-bold">{year}</h2>
          <div className="flex gap-2">
            <button onClick={handlePrev} className="px-3 py-1 bg-gray-200 rounded">{year - 1}</button>
            <button onClick={handleNext} className="px-3 py-1 bg-gray-200 rounded">{year + 1}</button>
          </div>
        </div>

        {loading && <p>Φόρτωση...</p>}
        {error && <p className="text-red-600">{error}</p>}

        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          {MONTHS.map((m) => {
            const item = data[m.key] || { Path: "/img/img.jpg", Title: "" };
            return (
              <article key={m.key} className="bg-white rounded shadow p-4 flex flex-col">
                <figure className="mb-3 h-48 overflow-hidden rounded">
                  <img
                    src={item.Path}
                    alt={item.Title || m.label}
                    className="w-full h-full object-cover"
                    onError={(e) => { e.currentTarget.src = '/img/img.jpg'; }}
                  />
                </figure>
                <p className="text-sm text-gray-500">{m.label}</p>
                <h3 className="font-semibold truncate">{item.Title}</h3>
                <div className="mt-auto pt-3">
                  <button
                    onClick={() => handleSelect(m.key, item.Title)}
                    className="w-full px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                  >
                    Άνοιγμα
                  </button>
                </div>
              </article>
            );
          })}
        </div>
      </main>

      {/* FOOTER */}
      <footer id="footer" className="bg-white border-t">
        <div className="max-w-6xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <img src="/img/logos/Neot_Logo.png" alt="logo" className="h-16" />
          </div>
          <div className="flex items-center gap-4">
            <div className="space-y-3">
              <a target="_blank" rel="noreferrer" href="https://maps.app.goo.gl/YDU1SQ7ZfkLvtfat5">
                <p>οδός: Βερανζέρου 9, Περιστέρι 121 35</p>
              </a>
              <p>Τηλ: 697 420 2245</p>
              <a target="_blank" rel="noreferrer" href="https://imperisteriou.gr/">Μητρόπολη: imperisteriou.gr</a>
              <a href="mailto:neotita@imperisteriou.gr">neotita@imperisteriou.gr</a>
            </div>
          </div>
          <div className="text-right text-sm text-gray-500">
            <p>© {new Date().getFullYear()} Neotita</p>
          </div>
        </div>
      </footer>
    </div>
  );
}

