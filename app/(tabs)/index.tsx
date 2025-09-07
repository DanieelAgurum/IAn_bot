import { Image } from 'expo-image';
import { StyleSheet, Platform, Pressable } from 'react-native';
import { useRouter } from 'expo-router';

import { HelloWave } from '@/components/HelloWave';
import ParallaxScrollView from '@/components/ParallaxScrollView';
import { ThemedText } from '@/components/ThemedText';
import { ThemedView } from '@/components/ThemedView';

export default function HomeScreen() {
  const router = useRouter();

  return (
    <ParallaxScrollView
      headerBackgroundColor={{ light: '#A1CEDC', dark: '#1D3D47' }}
      headerImage={
        <Image
          source={require('@/assets/images/partial-react-logo.png')}
          style={styles.reactLogo}
        />
      }>
      <ThemedView style={styles.centeredContainer}>
        <ThemedText type="title" style={styles.title}>
          ¡Bienvenido a IAN Bot!
        </ThemedText>
        <ThemedText style={styles.description}>
          Tu asistente inteligente para resolver dudas, aprender y automatizar tareas. 
          ¡Explora las funciones y comienza ahora!
        </ThemedText>
        <Pressable style={styles.button} onPress={() => router.push('/login')}>
          <ThemedText type="defaultSemiBold" style={styles.buttonText}>
            Comenzar
          </ThemedText>
        </Pressable>
      </ThemedView>

      <ThemedView style={styles.featuresContainer}>
        <ThemedText type="subtitle" style={styles.featuresTitle}>
          ¿Qué puedes hacer aquí?
        </ThemedText>
        <ThemedText style={styles.featureItem}>• Consultar información y resolver dudas</ThemedText>
        <ThemedText style={styles.featureItem}>• Automatizar tareas repetitivas</ThemedText>
        <ThemedText style={styles.featureItem}>• Aprender sobre nuevas tecnologías</ThemedText>
      </ThemedView>

      <ThemedView style={styles.footer}>
        <ThemedText style={styles.footerText}>
          © 2025 IAn Bot | Versión 1.0
        </ThemedText>
      </ThemedView>
    </ParallaxScrollView>
  );
}

const styles = StyleSheet.create({
  centeredContainer: {
    alignItems: 'center',
    marginTop: 32,
    marginBottom: 24,
    gap: 16,
  },
  logo: {
    width: 120,
    height: 74,
    marginBottom: 8,
  },
  title: {
    fontSize: 28,
    textAlign: 'center',
    marginBottom: 4,
  },
  description: {
    textAlign: 'center',
    color: '#555',
    marginBottom: 8,
  },
  button: {
    backgroundColor: '#1D3D47',
    paddingVertical: 12,
    paddingHorizontal: 32,
    borderRadius: 24,
    marginTop: 12,
  },
  buttonText: {
    color: '#fff',
    fontSize: 18,
  },
  featuresContainer: {
    marginTop: 24,
    marginBottom: 16,
    paddingHorizontal: 16,
    gap: 6,
  },
  featuresTitle: {
    fontSize: 20,
    marginBottom: 6,
  },
  featureItem: {
    fontSize: 16,
    color: '#333',
  },
  footer: {
    alignItems: 'center',
    marginTop: 32,
    marginBottom: 16,
  },
  footerText: {
    color: '#888',
    fontSize: 14,
  },
  reactLogo: {
    height: 178,
    width: 290,
    bottom: 0,
    left: 0,
    position: 'absolute',
    opacity: 0.1,
  },
});