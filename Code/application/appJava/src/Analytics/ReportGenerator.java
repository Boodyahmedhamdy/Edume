package Analytics;

public class ReportGenerator implements IReportGenerator {

    private Generatable report;


    @Override
    public Generatable generateReport() {
        return report;
    }
}
