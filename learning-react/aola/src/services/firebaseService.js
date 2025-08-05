import { ref, push, set, onValue, remove, update } from "firebase/database";
import { database } from "../firebase";

const itemsRef = ref(database, "items");

export const createItem = (item) => {
  const newItemRef = push(itemsRef);
  return set(newItemRef, item);
};

export const readItems = (callback) => {
    onValue(itemsRef, (snapshot) => {
      const data = snapshot.val();
      console.log("Dados do Firebase:", data); // Debug aqui
      const items = data ? Object.entries(data).map(([key, value]) => ({ id: key, ...value })) : [];
      callback(items);
    });
  };
  

export const updateItem = (id, updatedItem) => {
  const itemRef = ref(database, `items/${id}`);
  return update(itemRef, updatedItem);
};

export const deleteItem = (id) => {
  const itemRef = ref(database, `items/${id}`);
  return remove(itemRef);
};
