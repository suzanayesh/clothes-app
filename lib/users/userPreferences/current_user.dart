import 'package:get/get.dart';
import 'package:products/users/userPreferences/user_preferences.dart';

import '../model/user.dart';

class CurrentUser extends GetxController {
  Rx<User> _currentUser = User(0, '', '', '').obs;
  getUserInfo() async {
    User? getUserIngoFromLocalStorage = await RememberUserPrefs.readUserInfo();
    _currentUser.value = getUserIngoFromLocalStorage!;
  }
}
