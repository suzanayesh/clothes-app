import 'package:flutter/material.dart';
import 'package:get/get.dart';
import 'package:products/users/authentication/login_screen.dart';
import 'package:products/users/authentication/signup_screen.dart';

import 'package:products/users/userPreferences/user_preferences.dart';
import 'package:products/pages/home.dart';

void main() {
  WidgetsFlutterBinding.ensureInitialized(); //empty white
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return GetMaterialApp(
      title: 'Clothes App',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        primarySwatch: Colors.purple,
      ),
      home: FutureBuilder(
        future: RememberUserPrefs.readUserInfo(),
        builder: (context, dataSnapShot) {
          if (dataSnapShot.data == null) {
            return const LoginScreen();
          } else {
            return HomeView();
          }
        },
      ),
    );
  }
}
