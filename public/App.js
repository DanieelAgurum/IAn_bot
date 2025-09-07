import React, { useState } from 'react';
import { View, Text, TextInput, Button, StyleSheet } from 'react-native';

export default function App() {
  const [nombre, setNombre] = useState('');

  const handleEnviar = () => {
    alert(`¡Hola, ${nombre}!`);
  };

  return (
    <View style={styles.container}>
      <Text style={styles.titulo}>Bienvenido</Text>
      <Text style={styles.label}>Nombre:</Text>
      <TextInput
        style={styles.input}
        placeholder="Ingresa tu nombre"
        value={nombre}
        onChangeText={setNombre}
      />
      <Button title="Enviar" onPress={handleEnviar} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#fff',
    padding: 24,
    borderRadius: 8,
    maxWidth: 400,
    alignSelf: 'center',
    marginTop: 40,
    shadowColor: '#000',
    shadowOpacity: 0.1,
    shadowRadius: 8,
    elevation: 2,
  },
  titulo: {
    fontSize: 24,
    marginBottom: 16,
    color: '#333',
  },
  label: {
    marginBottom: 8,
    color: '#555',
  },
  input: {
    width: '100%',
    padding: 8,
    marginBottom: 16,
    borderRadius: 4,
    borderWidth: 1,
    borderColor: '#ccc',
  },
});