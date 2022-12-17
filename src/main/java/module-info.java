module com.example.chronoemail {
    requires javafx.controls;
    requires javafx.fxml;
    requires mail;


    opens com.example.chronoemail to javafx.fxml;
    exports com.example.chronoemail;
}