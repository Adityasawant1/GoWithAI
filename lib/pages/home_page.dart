import 'package:firebase_auth/firebase_auth.dart';

import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    void SignOut() {
      FirebaseAuth.instance.signOut();
    }

    return Scaffold(
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Center(child: Text("Which color of ur buggati")),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Text("if u don't have bugatti then try this "),
                Center(
                    child: IconButton(
                        onPressed: SignOut, icon: Icon(Icons.logout_outlined))),
              ],
            )
          ],
        ),
      ),
    );
  }
}
