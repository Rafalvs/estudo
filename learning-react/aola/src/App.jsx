import { useEffect, useState } from "react";
import { createItem, readItems, updateItem, deleteItem } from "./services/firebaseService";

function App() {
  const [items, setItems] = useState([]);
  const [newText, setNewText] = useState("");

  useEffect(() => {
    readItems(setItems);
  }, []);

  const handleAdd = () => {
    if (newText.trim() === "") return;
    createItem({ text: newText });
    setNewText("");
  };

  const handleUpdate = (id) => {
    const updatedText = prompt("Novo texto:");
    if (updatedText) {
      updateItem(id, { text: updatedText });
    }
  };

  const handleDelete = (id) => {
    if (window.confirm("Deseja realmente deletar?")) {
      deleteItem(id);
    }
  };

  return (
    <div style={{ maxWidth: 600, margin: "auto", padding: 20 }}>
      <h1>CRUD React + Firebase Realtime</h1>
      <input
        value={newText}
        onChange={(e) => setNewText(e.target.value)}
        placeholder="Digite algo"
      />
      <button onClick={handleAdd}>Adicionar</button>

      <ul>
        {items.map(({ id, text }) => (
          <li key={id}>
            {text}{" "}
            <button onClick={() => handleUpdate(id)}>Editar</button>{" "}
            <button onClick={() => handleDelete(id)}>Deletar</button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default App;
