new svgMap({
  targetElementID: "svgMap",
  noDataText: "Not visited yet",
  mouseWheelZoomEnabled: true,
  mouseWheelZoomWithKey: true,
  showZoomReset: true,
  colorMax: "#57c9e0",
  data: {
    data: {
      visited: {
        name: "",
        format: "Visited",
        thousandSeparator: ",",
      },
      date: {
        name: "In",
      },
    },
    applyData: "visited",
    values: {
      FR: { visited: true, date: 2001, color: "green" },
      DE: { visited: true, date: "Many times" },
      GB: { visited: true, date: 2016 },
      SE: { visited: true, date: 2022 },
      CH: { visited: true, date: "Many times" },
      TR: { visited: true, date: [2015, 2019] },
      ES: { visited: true, date: [2021, 2022] },
      PT: { visited: true, date: 2018 },
      HR: { visited: true, date: 2021 },
      EC: { visited: true, date: 2022 },
      NZ: { visited: true, date: 2023 },
      AU: { visited: true, date: 2024 },
      US: { visited: true, date: 2024 },

      // ...
    },
  },
});
